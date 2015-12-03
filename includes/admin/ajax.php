<?php

include_once("configs/Sajax.php");
include_once("classes/class.Usuarios.php");
include_once("classes/class.Log_Estados.php");
include_once("classes/class.Log.php");

sajax_init();
sajax_export("buscar_usuario", "buscar_usuarios", "alta_usuario", "baja_usuario", "ver_registro");

function buscar_usuario($user) {
    global $db;
    $sql = "SELECT count(id_usuario) as nro
                FROM usuarios
                WHERE nombreusr = '$user'";
    
    $usr = $db->getAll($sql);
    
    if ($usr[0]["nro"] == "0") {
        return 0;
    } else {
        return 1;
    }
}

function buscar_usuarios($apellido, $nombre, $dni, $estado) {
    global $db;
    $usuario = new Usuarios($db);
    
    $sql = "SELECT id_usuario
                FROM usuarios JOIN estados ON usuarios.id_usuario = estados.id_sobre
                WHERE sobre like '".$usuario->getClassName()."' AND activo = 1";

    if ($apellido != "") {
        $sql .= " AND UPPER(apellido) LIKE '%".trim($apellido)."%' ";
    }

    if ($nombre != "") {
        $sql .= " AND UPPER(nombre) LIKE '%".trim($nombre)."%' ";
    }

    if ($dni != "") {
        $sql .= " AND UPPER(dni) LIKE '%".trim($dni)."%' ";
    }
    
    if($estado != "") {
        $sql .= " AND UPPER(estado) LIKE '".trim($estado)."' ";
    }

    $usr = $db->getAll($sql);

    if ($usr == NULL) {
        return 0;
    } else {
        return 1;
    }
}

function alta_usuario($id_usuario, $usrlogin) {
    global $db;
    $usuario = new Usuarios($db, $id_usuario);
    
    //CREA EL NUEVO ESTADO
    $estado = new Log_Estados($db);
    $estado->darAlta($usuario->getClassName(), $id_usuario, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "ALTA", $usuario->getClassName(), $id_usuario);
    
    return "Usuario dado de alta";
}

function baja_usuario($id_usuario, $usrlogin) {
    global $db;
    $usuario = new Usuarios($db, $id_usuario);
    
    //CREA EL NUEVO ESTADO
    $estado = new Log_Estados($db);
    $estado->darBaja($usuario->getClassName(), $id_usuario, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "BAJA", $usuario->getClassName(), $id_usuario);
    
    return "Usuario dado de baja";
}

function ver_registro($desde, $hasta, $usr, $accion, $clase){
    global $db, $smarty;
    
    $log =  new Log($db);
    $registros = $log->ver_log($usr, $desde, $hasta, $accion, $clase);
    
    $smarty->assign("log", $registros);
    $html = $smarty->fetch("admin/ver_registro_table.html");
    
    return $html;
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);
?>

