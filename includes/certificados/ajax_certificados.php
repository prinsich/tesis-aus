<?php
include_once("../../configs/ajaxSmartyBD.php");
include_once("../../configs/auxiliar_function.php");
include_once("../../classes/class.Alumno.php");
include_once("../../classes/class.Log_Estados.php");
include_once("../../classes/class.Log.php");

/*sql inyection en ajax*/
$datos_post = filter_input_array(INPUT_POST);
if(!sql_inyection_ajax($datos_post, new Log($db), basename($_SERVER['PHP_SELF']))){
    $funcion = filter_input(INPUT_GET, 'funcion');
    call_user_func($funcion, filter_input_array(INPUT_POST));
}

function buscar_alumnos($arg) {
  global $db,$smarty;
  $jsondata = array();
  $id_taller = $arg["id_taller"];

  $sql = "SELECT alumnos.id_alumno, apellido, nombre, dni
  FROM alumnos
  JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
  WHERE taller_alumno.id_taller = $id_taller";

  $lista_alumnos = $db->getAll($sql);

  $smarty->assign("lista_alumnos", $lista_alumnos);
  $html = $smarty->fetch("../../templates/certificados/crear_certificados_lista.tpl");

  $jsondata["html"] = $html;
  header('Content-type: application/json; charset=utf-8');
  echo json_encode($jsondata);
  exit();
}

?>
