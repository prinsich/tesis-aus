<?php
include_once("classes/class.Capacitador.php");
include_once("classes/class.Log_Estados.php");
include_once("classes/class.Log.php");

extract($_POST);
$datos = $_POST;

//ID's
if ($datos["accion"] == "modificar") {
    $datos_capacitador["id_capacitador"] = $datos["id_capacitador"];
    $smarty->assign("accion", "modificado");
} else if ($datos["accion"] == "agregar") {
    $datos_capacitador["id_capacitador"] = null;
    $smarty->assign("accion", "registrado");
}

//------------------------------------------------------------------------------
//Datos Capacitador
//------------------------------------------------------------------------------
$datos_capacitador["apellido"] = $datos["apellido"];
$datos_capacitador["nombre"] = $datos["nombre"];
$datos_capacitador["sexo"] = $datos["sexo"];
$datos_capacitador["domicilio"] = $datos["domicilio"];
$datos_capacitador["telefono"] = $datos["telefono"];
$datos_capacitador["celular"] = $datos["celular"];
$datos_capacitador["dni"] = $datos["dni"];
$datos_capacitador["fecha_nacimiento"] = $datos["fecha_nacimiento"];
$datos_capacitador["estado"] = "ACTIVO";


if ($datos_capacitador["id_capacitador"] == null) {
    $capacitador = new Capacitador($db);
} else {
    $capacitador = new Capacitador($db, $datos_capacitador["id_capacitador"]);
}

$id_capacitador = $capacitador->guardar($datos_capacitador);

//------------------------------------------------------------------------------
// Dar de alta como capacitador
//------------------------------------------------------------------------------
if ($datos["accion"] == "agregar"){
    $estado = new Log_Estados($db);
    $estado->darAlta($capacitador->getClassName(), $id_capacitador, $datos["usrlogin"]);
}

//------------------------------------------------------------------------------
// REGISTRO EN EL LOG
//------------------------------------------------------------------------------
$log = new Log($db);
$log->crear_registro($datos["usrlogin"], $datos["accion"], $capacitador->getClassName(), $id_capacitador);

//------------------------------------------------------------------------------
// SET VARIABLES PARA EL HTML
//------------------------------------------------------------------------------
$smarty->assign("apellido", strtoupper($datos["apellido"]));
$smarty->assign("nombre", strtoupper($datos["nombre"]));
$smarty->assign("dni", strtoupper($datos["dni"]));
