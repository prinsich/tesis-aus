<?php
include_once("classes/class.Talleres.php");
include_once("classes/class.Dias_Talleres.php");
$id_taller = $_GET["id_taller"];

$lista_dias = $db->getAll("
    SELECT dias.dia 
    FROM ".BASE_DATA.".dias JOIN dias_talleres ON dias.id_dia = dias_talleres.id_dia
    WHERE id_taller = $id_taller
    ORDER BY dias.id_dia");

$taller_aux = new Talleres($db);
$taller = $taller_aux->getTaller2($id_taller);

$lista_alumnos = $db->getAll("
    SELECT CONCAT(apellido, ', ', alumnos.nombre) AS nombre
    FROM alumnos JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
    WHERE taller_alumno.id_taller = $id_taller
    ORDER BY apellido");

$cantidad_alumnos = $db->getAll("
    SELECT COUNT(alumnos.id_alumno) AS cantidad_alumnos
    FROM alumnos JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
    WHERE taller_alumno.id_taller = $id_taller");

$smarty->assign("lista_alumnos", $lista_alumnos);
$smarty->assign("lista_dias", $lista_dias);
$smarty->assign("taller", $taller);
$smarty->assign("id_taller", $id_taller);
$smarty->assign("cantidad_alumnos", $cantidad_alumnos[0]["cantidad_alumnos"]);

?>

