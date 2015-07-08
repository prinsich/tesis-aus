<?php
include_once("configs/Sajax.php");
include_once("classes/class.Alumno.php");

sajax_init();
sajax_export("buscar_alumnos"); 

function buscar_alumnos($id_taller) {
    global $db,$smarty;

    $sql = "SELECT alumnos.id_alumno, apellido, nombre, dni
            FROM alumnos 
                JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
            WHERE taller_alumno.id_taller = $id_taller";
    
    $lista_alumnos = $db->getAll($sql);

    $smarty->assign("lista_alumnos", $lista_alumnos);
    $html = $smarty->fetch("certificados/alumnos.html");
    
    return $html;
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);

?>

