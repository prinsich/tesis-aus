<?php
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

function newPassword($arg) {
    global $db;
    $jsondata = array();

    //obtenemos el usr y la pass
    $username = $arg['username'];
    $password = $arg['password'];

    $usuario = new Usuarios($db);
    $usuario->setPassword($username, $password);
    $jsondata["success"] = true;

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

?>
