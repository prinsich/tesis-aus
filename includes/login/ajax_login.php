<?php
session_start();
include_once("../../configs/ajaxSmartyBD.php");
include_once("../../configs/auxiliar_function.php");
include_once("../../classes/class.Usuarios.php");
include_once("../../classes/class.Log_Estados.php");
include_once("../../classes/class.Log.php");

/*sql inyection en ajax*/
$datos_post = filter_input_array(INPUT_POST);
if(!sql_inyection_ajax($datos_post, new Log($db), basename($_SERVER['PHP_SELF']))){
    $funcion = filter_input(INPUT_GET, 'funcion');
    call_user_func($funcion, filter_input_array(INPUT_POST));
}

function login($arg) {
  global $db,$smarty;
  $jsondata = array();

  //obtenemos el usr y la pass
  $username = $arg['usr'];
  $password = $arg['password'];

  $usuario = new Usuarios($db);
  $logon = $usuario->login($username, $password);

  if($logon){
      $usrLogeado = $usuario->getUsuarioLogin($username);

      $_SESSION['logged_in'] = true;
      $_SESSION['usr'] = $usrLogeado["nombreusr"];
      $_SESSION['perfil'] = $usrLogeado["perfil"];

      //$log = new Log($db);
      //$log->crear_registro($usrLogeado["nombreusr"], "LOGIN", "", "");
      //echo $usrLogeado["nombreusr"]."-".$usrLogeado["perfil"]."-".$usrLogeado["newpass"]."-"."success";
      $jsondata["success"] = true;
  } else {
      $_SESSION['error'] = "Wrong username or password.";
      $jsondata["success"] = false;
  }

  header('Content-type: application/json; charset=utf-8');
  echo json_encode($jsondata);
  exit();
}

function setPass($arg){
  global $db,$smarty;
  $jsondata = array();

  //obtenemos el usr y la pass
  $username = $arg['usr'];
  $newPass =  generaPass();

  $usuario = new Usuarios($db);
  $usrExist = $usuario->usrExist($username);

  if($usrExist){
      $usuario->setPassword($username, $newPass);
      $jsondata["success"] = true;
      $jsondata["newpass"] = $newPass;
  } else {
      $jsondata["success"] = false;
  }

  header('Content-type: application/json; charset=utf-8');
  echo json_encode($jsondata);
  exit();
}

function generaPass(){
    //Se define una cadena de caractares. Te recomiendo que uses esta.
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    //Obtenemos la longitud de la cadena de caracteres
    $longitudCadena=strlen($cadena);

    //Se define la variable que va a contener la contraseña
    $pass = "";
    //Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
    $longitudPass=8;

    //Creamos la contraseña
    for($i=1 ; $i<=$longitudPass ; $i++){
        //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
        $pos=rand(0,$longitudCadena-1);

        //Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
        $pass .= substr($cadena,$pos,1);
    }
    return $pass;
}
