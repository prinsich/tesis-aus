<?php
include_once("includes/alumnos/ajax.php");
include_once("classes/class.Alumno.php");
$alumno = new Alumno($db);

$lista_alumnos = null;

if(empty($_POST)){
    $lista_alumnos = $alumno->listar_alumnos();
    $smarty->assign("estado", "");
} else {
    extract($_POST);
    $datos = $_POST;
    $lista_alumnos = $alumno->buscar_alumnos($datos["apellido"], $datos["nombre"], $datos["dni"], $datos["taller"], $datos["alta_seguro"], $datos["estado"]);    
    $smarty->assign("estado", $datos["estado"]);
}

$smarty->assign("cantidad_alumnos", count($lista_alumnos));
$smarty->assign("lista_alumnos", $lista_alumnos);
$smarty->assign("usrlogin", $usrlogin);
?>