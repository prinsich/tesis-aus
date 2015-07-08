<?php
include_once("includes/talleres/ajax.php");
include_once("classes/class.Talleres.php");
$taller = new Talleres($db);

$lista_talleres = null;

if(empty($_POST)){
    $lista_talleres = $taller->listar_talleres();
} else {
    extract($_POST);
    $datos = $_POST;
    $lista_talleres = $taller->buscar_talleres($datos["nombre"], $datos["id_capacitador"], $datos["estado"]);    
}

$cantidad_alumnos_taller = $taller->cantidad_alumnos_por_taller();

$smarty->assign("cantidad_talleres", count($lista_talleres));
$smarty->assign("lista_talleres", $lista_talleres);
$smarty->assign("cantidad_alumnos_taller", $cantidad_alumnos_taller);
?>