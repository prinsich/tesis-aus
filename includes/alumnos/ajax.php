<?php
include_once("configs/Sajax.php");
include_once("classes/class.Alumno.php");
include_once("classes/class.Datos_Familiares.php");
include_once("classes/class.Datos_Medicos.php");
include_once("classes/class.Datos_Personales.php");
include_once("classes/class.Taller_Alumno.php");

include_once("classes/class.Estados.php");
include_once("classes/class.Log.php");

sajax_init();
sajax_export("buscar_alumnos", "alta_alumno", "baja_alumno", "eliminar_familiar");

function buscar_alumnos($apellido, $nombre, $dni, $id_taller, $alta_seguro, $estado) {
    global $db;
    
    $alumno = new Alumno($db);
    
    $sql = "SELECT alumnos.id_alumno
                FROM alumnos JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
                JOIN estados ON alumnos.id_alumno = estados.id_sobre
                WHERE sobre like '".$alumno->getClassName()."' AND activo = 1";

    if ($apellido != "") {
        $sql .= " AND UPPER(apellido) LIKE '%".trim($apellido)."%' ";
    }

    if ($nombre != "") {
        $sql .= " AND UPPER(nombre) LIKE '%".trim($nombre)."%' ";
    }

    if ($dni != "") {
        $sql .= " AND UPPER(dni) LIKE '%".trim($dni)."%' ";
    }
    
    if($id_taller != 0) {
      $sql .= " AND id_taller = ".$id_taller." ";
    }
    
    if($alta_seguro != "") {
      $sql .= " AND UPPER(alta_seguro) LIKE '%".trim($alta_seguro)."%' ";
    }
    
    if($estado != "") {
        $sql .= " AND UPPER(estado) LIKE '".trim($estado)."' ";
    }
    
    //var_dump($sql);
    //die;
    $alumnos = $db->getAll($sql);

    if ($alumnos == NULL) {
        return 0;
    } else {
        return 1;
    }
}
function alta_alumno($id_alumno, $usrlogin) {
    global $db;
    $alumno = new Alumno($db, $id_alumno);
    
    //CREA EL NUEVO ESTADO
    $estado = new Estados($db);
    $estado->darAlta($alumno->getClassName(), $id_alumno, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "ALTA", $alumno->getClassName(), $id_alumno);
    
    return "Alumno dado de alta";
}

function baja_alumno($id_alumno, $usrlogin) {
    global $db;
    $alumno = new Alumno($db, $id_alumno);
    
    //CREA EL NUEVO ESTADO
    $estado = new Estados($db);
    $estado->darBaja($alumno->getClassName(), $id_alumno, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "BAJA", $alumno->getClassName(), $id_alumno);
    
    return "Alumno dado de baja";
}

function eliminar_familiar($id_familiar) {
    global $db;
    $familiar = new Datos_Familiares($db, $id_familiar["id_familiar"]);
    $familiar->borrar("id_familiar = $id_familiar");

    return "Familiar/es Eliminado";
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);
?>

