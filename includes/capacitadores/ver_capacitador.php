<?php
include_once("classes/class.Capacitador.php");

$capacitador = new Capacitador($db);

$id_capacitador = $_GET["id_capacitador"];

$datos_capacitador = $capacitador->getCapacitador($id_capacitador);
$datos_talleres = $capacitador->getTalleresDicta($id_capacitador);

$smarty->assign("datos_capacitador", $datos_capacitador);
$smarty->assign("lista_talleres", $datos_talleres);
$smarty->assign("cantidad_talleres", count($datos_talleres));