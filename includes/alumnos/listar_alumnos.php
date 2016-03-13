<?php
include_once("classes/class.Alumno.php");
$alumno = new Alumno($db);

$lista_alumnos = null;
$datos = filter_input_array(INPUT_POST);

if(empty($datos)){
    $lista_alumnos = $alumno->listar_alumnos();
    $smarty->assign("estado", "");
} else {
    $lista_alumnos = $alumno->buscar_alumnos($datos["apellido"], $datos["nombre"], $datos["dni"], $datos["taller"], $datos["alta_seguro"], $datos["estado"]);
    $smarty->assign("estado", $datos["estado"]);
}

$smarty->assign("cantidad_alumnos", count($lista_alumnos));
$smarty->assign("lista_alumnos", $lista_alumnos);
$smarty->assign("usrlogin", $usrlogin);
?>
