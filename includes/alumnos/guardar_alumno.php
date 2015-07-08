<?php

include_once("classes/class.Alumno.php");
include_once("classes/class.Datos_Familiares.php");
include_once("classes/class.Datos_Medicos.php");
include_once("classes/class.Datos_Personales.php");
include_once("classes/class.Taller_Alumno.php");
include_once("classes/class.Estados.php");
include_once("classes/class.Log.php");

extract($_POST);
$datos = $_POST;

//ID's
if ($datos["accion"] == "modificar") {
    $datos_alumnos["id_alumno"] = $datos["id_alumno"];
    $datos_medicos["id_dato_medico"] = $datos["id_dato_medico"];
    $datos_personales["id_personal"] = $datos["id_personal"];
    $smarty->assign("accion", "modificado");
} else if ($datos["accion"] == "agregar") {
    $datos_alumnos["id_alumno"] = null;
    $datos_medicos["id_dato_medico"] = null;
    $datos_personales["id_personal"] = null;
    $smarty->assign("accion", "registrado");
}

//------------------------------------------------------------------------------
//Datos Alumnos
//------------------------------------------------------------------------------
$datos_alumno["apellido"] = $datos["apellido"];
$datos_alumno["nombre"] = $datos["nombre"];
$datos_alumno["sexo"] = $datos["sexo"];
$datos_alumno["domicilio"] = $datos["domicilio"];
$datos_alumno["barrio"] = $datos["barrio"];
$datos_alumno["telefono"] = $datos["telefono"];
$datos_alumno["dni"] = $datos["dni"];
$datos_alumno["fecha_nacimiento"] = $datos["fecha_nacimiento"];
$datos_alumno["escuela"] = $datos["escuela"];
$datos_alumno["anio"] = $datos["anio"];
$datos_alumno["turno"] = $datos["turno"];
$datos_alumno["alta_seguro"] = $datos["alta_seguro"];

if ($datos_alumnos["id_alumno"] == null) {
    $alumno = new Alumno($db);
} else {
    $alumno = new Alumno($db, $datos_alumnos["id_alumno"]);
}

$id_alumno = $alumno->guardar($datos_alumno);

if (isset($datos['talleres_list'])) {
    $taller_alumno = new Taller_Alumno($db);
    $taller_alumno->borrar("id_alumno = ".$datos_alumnos["id_alumno"]);
    foreach ($datos['talleres_list'] as $taller) {
        if ($datos_alumnos["id_alumno"] == null) {
            $taller_alumno = new Taller_Alumno($db);
            
            $datos_taller_alumno["id_taller_alumno"] = null;
            $datos_taller_alumno["id_alumno"] = $id_alumno;
            $datos_taller_alumno["id_taller"] = $taller;
            $taller_alumno->guardar($datos_taller_alumno);
        } else {
            $id_taller_alumno = $taller_alumno->getID($datos_alumnos["id_alumno"], $taller);
            
            $datos_taller_alumno["id_taller_alumno"] = null;
            $datos_taller_alumno["id_alumno"] = $datos_alumnos["id_alumno"];
            $datos_taller_alumno["id_taller"] = $taller;
            $taller_alumno->guardar($datos_taller_alumno);
        }
    }
}

//------------------------------------------------------------------------------
//Datos Familiares
//------------------------------------------------------------------------------
$cantidad_familiares = $datos["cant_filas"];
$i = 0;
for ($i = 0; $i < $cantidad_familiares; $i++) {
    if (isset($datos["nombre_apellido_" . $i])) {
        if ($datos["accion"] == "modificar") {
            $datos_familiares["id_familiar"] = $datos["id_familiar_" . $i];
        } else if ($datos["accion"] == "agregar") {
            $datos_familiares["id_familiar"] = null;
        }

        if ($datos["accion"] == "modificar") {
            $datos_familiares["id_alumno"] = $datos["id_alumno"];
        } else if ($datos["accion"] == "agregar") {
            $datos_familiares["id_alumno"] = $id_alumno;
        }

        $datos_familiares["nombre_apellido"] = $datos["nombre_apellido_" . $i];
        $datos_familiares["parentesco"] = $datos["parentesco_" . $i];
        $datos_familiares["edad"] = $datos["edad_" . $i];
        $datos_familiares["estado_civil"] = $datos["estado_civil_" . $i];
        $datos_familiares["vive_hogar"] = $datos["vive_hogar_" . $i];
        $datos_familiares["ocupacion"] = $datos["ocupacion_" . $i];


        if ($datos_familiares["id_familiar"] == null) {
            $familiar = new Datos_Familiares($db);
        } else {
            $familiar = new Datos_Familiares($db, $datos_familiares["id_familiar"]);
        }
        $familiar->guardar($datos_familiares);
    }
}

//------------------------------------------------------------------------------
//Datos Medicos
//------------------------------------------------------------------------------
if ($datos["accion"] == "modificar") {
    $datos_medicos["id_alumno"] = $datos["id_alumno"];
} else if ($datos["accion"] == "agregar") {
    $datos_medicos["id_alumno"] = $id_alumno;
}

$datos_medicos["grupo_sanguineo"] = $datos["grupo_sanguineo"];
$datos_medicos["vacunacion"] = $datos["vacunacion"];
$datos_medicos["vacunas_faltantes"] = $datos["vacunas_faltantes"];
$datos_medicos["enfermedades_padecidas"] = $datos["enfermedades_padecidas"];
$datos_medicos["alergias"] = $datos["alergias"];
$datos_medicos["secuelas"] = $datos["secuelas"];
$datos_medicos["cuidados_especiales"] = $datos["cuidados_especiales"];
$datos_medicos["enfermedades_cogenitas"] = $datos["enfermedades_cogenitas"];
$datos_medicos["cirugias"] = $datos["cirugias"];
$datos_medicos["tratamientos_prolongados"] = $datos["tratamientos_prolongados"];
$datos_medicos["tratamientos_actuales"] = $datos["tratamientos_actuales"];
$datos_medicos["medicacion_actual"] = $datos["medicacion_actual"];
$datos_medicos["urgencias"] = $datos["urgencias"];
$datos_medicos["obra_social"] = $datos["obra_social"];

if ($datos_medicos["id_dato_medico"] == null) {
    $medico = new Datos_Medicos($db);
} else {
    $medico = new Datos_Medicos($db, $datos_medicos["id_dato_medico"]);
}
$medico->guardar($datos_medicos);


//------------------------------------------------------------------------------
//Datos Personales y del Grupo familar
//------------------------------------------------------------------------------
if ($datos["accion"] == "modificar") {
    $datos_personales["id_alumno"] = $datos["id_alumno"];
} else if ($datos["accion"] == "agregar") {
    $datos_personales["id_alumno"] = $id_alumno;
}

$datos_personales["observaciones_familiares"] = $datos["observaciones_familiares"];
$datos_personales["relaciones_familiares"] = $datos["relaciones_familiares"];
$datos_personales["grupo_amigo"] = $datos["grupo_amigo"];
$datos_personales["tiempo_libre"] = $datos["tiempo_libre"];
$datos_personales["educacion"] = $datos["educacion"];
$datos_personales["trabajo"] = $datos["trabajo"];
$datos_personales["como_llega"] = $datos["como_llega"];
$datos_personales["porque_viene"] = $datos["porque_viene"];
$datos_personales["instituciones"] = $datos["instituciones"];
$datos_personales["preocupaciones"] = $datos["preocupaciones"];
$datos_personales["que_hizo"] = $datos["que_hizo"];
$datos_personales["observaciones_personales"] = $datos["observaciones_personales"];

if ($datos_personales["id_personal"] == null) {
    $personal = new Datos_Personales($db);
} else {
    $personal = new Datos_Personales($db, $datos_personales["id_personal"]);
}
$personal->guardar($datos_personales);

//------------------------------------------------------------------------------
// Dar de alta como capacitador
//------------------------------------------------------------------------------
if ($datos["accion"] == "agregar"){
    $estado = new Estados($db);
    $estado->darAlta($alumno->getClassName(), $id_alumno, $datos["usrlogin"]);
}

//------------------------------------------------------------------------------
// REGISTRO EN EL LOG
//------------------------------------------------------------------------------
$log = new Log($db);
$log->crear_registro($datos["usrlogin"], $datos["accion"], $alumno->getClassName(), $id_alumno);

//------------------------------------------------------------------------------
// SET VARIABLES PARA EL HTML
//------------------------------------------------------------------------------

$smarty->assign("apellido", strtoupper($datos["apellido"]));
$smarty->assign("nombre", strtoupper($datos["nombre"]));
$smarty->assign("dni", strtoupper($datos["dni"]));