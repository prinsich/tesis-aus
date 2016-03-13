<?php
include_once("classes/class.Capacitador.php");

$id_capacitador = filter_input(INPUT_GET, 'id_capacitador');

$capacitador = new Capacitador($db);

$datos_capacitador = $capacitador->getCapacitador($id_capacitador);

$datos_capacitador = $capacitador->getCapacitador($id_capacitador);
$datos_talleres = $capacitador->getTalleresDicta($id_capacitador);

$smarty->assign("datos_capacitador", $datos_capacitador);
$smarty->assign("lista_talleres", $datos_talleres);
$smarty->assign("cantidad_talleres", count($datos_talleres));
