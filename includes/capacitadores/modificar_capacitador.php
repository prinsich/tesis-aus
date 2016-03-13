<?php
include_once("classes/class.Capacitador.php");

$capacitador = new Capacitador($db);

$id_capacitador = filter_input(INPUT_GET, 'id_capacitador');

$datos_capacitador = $capacitador->getCapacitador($id_capacitador);

$smarty->assign("datos_capacitador", $datos_capacitador);
$smarty->assign("usrlogin", $usrlogin);
$smarty->assign("fecha_hoy", date("Y-m-d")."T23:59:59");
