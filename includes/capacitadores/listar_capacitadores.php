<?php
include_once("classes/class.Capacitador.php");
$capacitador = new Capacitador($db);

$lista_capacitadores = null;
$datos = filter_input_array(INPUT_POST);

if(empty($datos)){
    $lista_capacitadores = $capacitador->listar_capacitadores();
    $smarty->assign("estado", "");
} else {
    $lista_capacitadores = $capacitador->buscar_capacitadores($datos["apellido"], $datos["nombre"], $datos["dni"], $datos["estado"]);
    $smarty->assign("estado",  $datos["estado"]);
}

$smarty->assign("cantidad_capacitadores", count($lista_capacitadores));
$smarty->assign("lista_capacitadores", $lista_capacitadores);
$smarty->assign("usrlogin", $usrlogin);
