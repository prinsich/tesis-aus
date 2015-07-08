<?php

include_once("configs/Sajax.php");
include_once("classes/class.Capacitador.php");
include_once("classes/class.Estados.php");
include_once("classes/class.Log.php");

sajax_init();
sajax_export("buscar_capacitadores", "alta_capacitador", "baja_capacitador");

function buscar_capacitadores($apellido, $nombre, $dni, $estado) {
    global $db;
    
    $capacitador = new Capacitador($db);
            
    $sql = "SELECT id_capacitador
                FROM capacitadores
                    JOIN estados ON capacitadores.id_capacitador = estados.id_sobre
                WHERE sobre LIKE '".$capacitador->getClassName()."' AND activo = 1 ";

    if ($apellido != "") {
        $sql .= " AND UPPER(apellido) LIKE '%" . trim($apellido) . "%' ";
    }

    if ($nombre != "") {
        $sql .= " AND UPPER(nombre) LIKE '%" . trim($nombre) . "%' ";
    }

    if ($dni != "") {
        $sql .= " AND UPPER(dni) LIKE '%" . trim($dni) . "%' ";
    }
    
    if($estado != "") {
        $sql .= " AND UPPER(estado) LIKE '".trim($estado)."' ";
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
    
    //CREA EL NUEVO ESTADO
    $estado = new Estados($db);
    $estado->darAlta($capacitador->getClassName(), $id_capacitador, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "ALTA", $capacitador->getClassName(), $id_capacitador);
    
    return "Capacitador dado de alta";
}

function baja_capacitador($id_capacitador, $usrlogin) {
    global $db;
    $capacitador = new Capacitador($db, $id_capacitador);
    
    //CREA EL NUEVO ESTADO
    $estado = new Estados($db);
    $estado->darBaja($capacitador->getClassName(), $id_capacitador, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "BAJA", $capacitador->getClassName(), $id_capacitador);
    
    return "Capacitador dado de baja";
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);

