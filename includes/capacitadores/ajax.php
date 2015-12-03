<?php

include_once("configs/Sajax.php");
include_once("classes/class.Capacitador.php");
include_once("classes/class.Talleres.php");
include_once("classes/class.Log_Estados.php");
include_once("classes/class.Log.php");

sajax_init();
sajax_export("buscar_capacitadores", "alta_capacitador", "baja_capacitador");

function buscar_capacitadores($apellido, $nombre, $dni, $estado) {
    global $db;
            
    $sql = "SELECT id_capacitador
                FROM capacitadores
                WHERE id_capacitador != 0 ";

    if($apellido != "") {
        $sql .= " AND apellido LIKE '$apellido%' ";
    }

    if($nombre != "") {
        $sql .= " AND nombre LIKE '$nombre%' ";
    }

    if($dni != "") {
        $sql .= " AND dni = $dni ";
    }

    if($estado != "") {
        $sql .= " AND estado LIKE '$estado' ";
    }

    $capacitadores = $db->getAll($sql);

    //var_dump($sql);
    //die;
    if ($capacitadores == NULL) {
        return 0;
    } else {
        return 1;
    }
}

function alta_capacitador($id_capacitador, $usrlogin) {
    global $db;
    $capacitador = new Capacitador($db, $id_capacitador);
    $capacitador->darAlta($id_capacitador);
    
    //CREA EL NUEVO ESTADO
    $estado = new Log_Estados($db);
    $estado->darAlta($capacitador->getClassName(), $id_capacitador, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "ALTA", $capacitador->getClassName(), $id_capacitador);
    
    return "Capacitador dado de alta";
}

function baja_capacitador($id_capacitador, $usrlogin) {
    global $db;
    $capacitador = new Capacitador($db, $id_capacitador);
    $capacitador->darBaja($id_capacitador);
    
    //Busca talleres
    $taller = new Talleres($db);
    $talleres = $taller->buscar_talleres("", $id_capacitador, "");
    foreach ($talleres as $t){
        $taller->quitarCapacitador($t["id_taller"]);
        $taller->darBaja($t["id_taller"]);
    }
    
    //CREA EL NUEVO ESTADO
    $estado = new Log_Estados($db);
    $estado->darBaja($capacitador->getClassName(), $id_capacitador, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "BAJA", $capacitador->getClassName(), $id_capacitador);
    
    return "Capacitador dado de baja";
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);

