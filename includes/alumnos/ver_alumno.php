<?php
include_once("classes/class.Alumno.php");
include_once("classes/class.Datos_Familiares.php");
include_once("classes/class.Datos_Medicos.php");
include_once("classes/class.Datos_Personales.php");
include_once("classes/class.Taller_Alumno.php");

$alumno = new Alumno($db);
$familiar = new Datos_Familiares($db);
$medico = new Datos_Medicos($db);
$personal = new Datos_Personales($db);
$talleres = new Taller_Alumno($db);

$id_alumno = $_GET["id_alumno"];

$datos_alumno = $alumno->getAlumno($id_alumno);
$datos_medicos = $medico->getDatosMedicos($id_alumno);
$datos_familiares = $familiar->getDatosFamiliares($id_alumno);
$datos_personales = $personal->getDatosPerosnales($id_alumno);

$talleres_alumno = $talleres->getTalleresName($id_alumno);


$smarty->assign("datos_alumno", $datos_alumno);
$smarty->assign("datos_medicos", $datos_medicos);
$smarty->assign("datos_familiares", $datos_familiares);
$smarty->assign("datos_personales", $datos_personales);
$smarty->assign("talleres_alumno", $talleres_alumno);