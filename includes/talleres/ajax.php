<?php

include_once("configs/Sajax.php");
include_once("classes/class.Talleres.php");
include_once("classes/class.Dias_Talleres.php");
include_once("classes/class.Taller_Alumno.php");
include_once("classes/class.Estados.php");
include_once("classes/class.Log.php");

sajax_init();
sajax_export("buscar_talleres", "alta_taller", "baja_taller", "reset_taller");

function buscar_talleres($nombre, $id_capacitador, $estado) {
    global $db;
    
    $taller = new Talleres($db);
    
    $sql = "SELECT id_taller
            FROM talleres
                JOIN estados ON talleres.id_taller = estados.id_sobre
            WHERE sobre LIKE '".$taller->getClassName()."' AND activo = 1 ";
    
    if ($nombre != "") {
        $sql .= " AND UPPER(nombre) LIKE '%".trim($nombre)."%' ";
    }

    if ($id_capacitador != 0) {
        $sql .= " AND id_capacitador = ".$id_capacitador." ";
    }
    
    if($estado != "") {
        $sql .= " AND UPPER(estado) LIKE '".trim($estado)."' ";
    }
    
    $lista_talleres = $db->getAll($sql);
    
    if ($lista_talleres == NULL) {
        return 0;
    } else {
        return 1;
    }
}

function baja_taller($id_taller, $usrlogin) {
    global $db;
    $taller = new Talleres($db, $id_taller);

    $alumno = new Taller_Alumno($db);
    $alumno->borrar("id_taller = $id_taller");
    
    //CREA EL NUEVO ESTADO
    $estado = new Estados($db);
    $estado->darBaja($taller->getClassName(), $id_taller, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "BAJA", $taller->getClassName(), $id_taller);

    return "El taller fue dado de baja";
}

function alta_taller($id_taller, $usrlogin) {
    global $db;
    $taller = new Talleres($db, $id_taller);
    
    //CREA EL NUEVO ESTADO
    $estado = new Estados($db);
    $estado->darAlta($taller->getClassName(), $id_taller, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "ALTA", $taller->getClassName(), $id_taller);
    
    return "Capacitador dado de alta";
}

function reset_taller($id_taller, $usrlogin) {
    global $db;
    $taller = new Talleres($db, $id_taller);
    $alumno = new Taller_Alumno($db);
    $alumno->borrar("id_taller = $id_taller");
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "RESET TALLER", $taller->getClassName(), $id_taller);

    return "Taller Reseteado";
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);
?>

