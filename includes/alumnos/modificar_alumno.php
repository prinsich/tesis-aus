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

$id_alumno = filter_input(INPUT_GET, 'id_alumno');

$datos_alumno = $alumno->getAlumno($id_alumno);
$datos_familiares = $familiar->getDatosFamiliares($id_alumno);
$datos_medicos = $medico->getDatosMedicos($id_alumno);
$datos_personales = $personal->getDatosPerosnales($id_alumno);

$talleres = new Taller_Alumno($db);
$talleres_alumno = $talleres->getTalleres($id_alumno);
$taller_str = "";
foreach ($talleres_alumno as $taller_alumno){
    $taller_str .= ",".$taller_alumno["id_taller"];
}

$smarty->assign("datos_alumno", $datos_alumno);
$smarty->assign("datos_familiares", $datos_familiares);
$smarty->assign("datos_medicos", $datos_medicos);
$smarty->assign("datos_personales", $datos_personales);
$smarty->assign("talleres_alumno", $taller_str);
$smarty->assign("usrlogin", $usrlogin);
$smarty->assign("fecha_hoy", date("Y-m-d")."T23:59:59");

?>