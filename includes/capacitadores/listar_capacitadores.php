<?php
include_once("includes/capacitadores/ajax.php");
include_once("classes/class.Capacitador.php");
$capacitador = new Capacitador($db);

$lista_capacitadores = null;

if(empty($_POST)){
    $lista_capacitadores = $capacitador->listar_capacitadores();
} else {
    extract($_POST);
    $datos = $_POST;
    $lista_capacitadores = $capacitador->buscar_capacitadores($datos["apellido"], $datos["nombre"], $datos["dni"], $datos["estado"]);    
}

$smarty->assign("cantidad_capacitadores", count($lista_capacitadores));
$smarty->assign("lista_capacitadores", $lista_capacitadores);
$smarty->assign("usrlogin", $usrlogin);