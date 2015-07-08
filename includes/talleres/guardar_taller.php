<?php

include_once("classes/class.Talleres.php");
include_once("classes/class.Dias_Talleres.php");
include_once("classes/class.Taller_Alumno.php");
include_once("classes/class.Estados.php");
include_once("classes/class.Log.php");

extract($_POST);
$datos = $_POST;

//------------------------------------------------------------------------------
// DATOS TALLER
//------------------------------------------------------------------------------
if ($datos["accion"] == "modificar") {
    $datos_taller["id_taller"] = $datos["id_taller"];
    $smarty->assign("accion", "modificado");
} else if ($datos["accion"] == "agregar") {
    $datos_taller["id_taller"] = null;
    $smarty->assign("accion", "registrado");
}

$datos_taller["id_capacitador"] = $datos["id_capacitador"];
$datos_taller["nombre"] = $datos["nombre"];

if ($datos_taller["id_taller"] == null) {
    $taller = new Talleres($db);
} else {
    $taller = new Talleres($db, $datos_taller["id_taller"]);
}

$id_taller = $taller->guardar($datos_taller);

//------------------------------------------------------------------------------
// DATOS DIAS
//------------------------------------------------------------------------------
if ($datos_taller["id_taller"] == null) {
    foreach ($datos['days_list'] as $selected) {
        $dias_taller = new Dias_Talleres($db);
        $datos_dias_taller["id_dia_taller"] = null;
        $datos_dias_taller["id_taller"] = $id_taller;
        $datos_dias_taller["id_dia"] = $selected;
        $dias_taller->guardar($datos_dias_taller);
    }
} else {
    foreach ($datos['days_list'] as $selected) {
        $dias_taller = new Dias_Talleres($db, $datos["id_dia_taller_" . $selected]);
        $datos_dias_taller["id_dia_taller"] = $datos["id_dia_taller_" . $selected];
        $datos_dias_taller["id_taller"] = $datos["id_taller"];
        $datos_dias_taller["id_dia"] = $selected;
        $dias_taller->guardar($datos_dias_taller);
    }
}

//------------------------------------------------------------------------------
// ELIMINA ALUMNOS DEL TALLER
//------------------------------------------------------------------------------
$observaciones = "";
if (isset($datos['alumnos'])) {
    $observaciones = "Se eliminaron de este curso los alumnos con id ";
    foreach ($datos['alumnos'] as $selected) {
        $alumno = new Taller_Alumno($db);
        $alumno->borrar("id_alumno = $selected");
        $observaciones .= $selected.", ";
    }
}

//------------------------------------------------------------------------------
// Dar de alta como taller
//------------------------------------------------------------------------------
if ($datos["accion"] == "agregar"){
    $estado = new Estados($db);
    $estado->darAlta($taller->getClassName(), $id_taller, $datos["usrlogin"]);
}

//------------------------------------------------------------------------------
// REGISTRO EN EL LOG
//------------------------------------------------------------------------------
$log = new Log($db);
$log->crear_registro($datos["usrlogin"], $datos["accion"], $taller->getClassName(), $id_taller, $observaciones);

$smarty->assign("nombre", strtoupper($datos["nombre"]));
?>
