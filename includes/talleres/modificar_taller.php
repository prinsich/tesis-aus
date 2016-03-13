<?php
include_once("classes/class.Talleres.php");
include_once("classes/class.Dias_Talleres.php");

$id_taller = filter_input(INPUT_GET, 'id_taller');

$lista_dias = $db->getAll("
    SELECT dias.id_dia, dia, id_dia_taller, id_taller 
    FROM ".BASE_DATA.".dias dias LEFT JOIN (
        SELECT *
        FROM `".BASE_TESIS_AUS."`.dias_talleres
        WHERE id_taller = $id_taller
            ) AS temp ON dias.id_dia = temp.id_dia
    WHERE dias.id_dia != 0
    ORDER BY dias.id_dia");

$lista_alumnos = $db->getAll("
    SELECT alumnos.id_alumno, CONCAT(apellido, ', ', alumnos.nombre) AS nombre
    FROM alumnos JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
    WHERE taller_alumno.id_taller = $id_taller
    ORDER BY apellido");

$smarty->assign("lista_alumnos", $lista_alumnos);

$taller_aux = new Talleres($db);
$taller = $taller_aux->getTaller($id_taller);

$smarty->assign("lista_dias", $lista_dias);
$smarty->assign("taller", $taller);
$smarty->assign("id_taller", $id_taller);
$smarty->assign("usrlogin", $usrlogin);

?>
