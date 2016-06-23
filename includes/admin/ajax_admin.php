<?php
include_once("../../configs/ajaxSmartyBD.php");
include_once("../../configs/auxiliar_function.php");
include_once("../../classes/class.Usuarios.php");
include_once("../../classes/class.Log_Estados.php");
include_once("../../classes/class.Log.php");

/*sql inyection en ajax*/
$datos_post = filter_input_array(INPUT_POST);
if(!sql_inyection_ajax($datos_post, new Log($db), basename($_SERVER['PHP_SELF']))){
    $funcion = filter_input(INPUT_GET, 'funcion');
    call_user_func($funcion, filter_input_array(INPUT_POST));
}

function buscar_nombre_usr($arg) {
    global $db;
    $jsondata = array();
    $user = $arg["user"];

    $sql = "SELECT count(id_usuario) as nro
    FROM usuarios
    WHERE nombreusr = '$user'";

    $usr = $db->getAll($sql);

    if ($usr[0]["nro"] == "0") {
        $jsondata['success'] = false;
    } else {
        $jsondata['success'] = true;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function buscar_usuarios($arg) {
    global $db;
    $apellido = $arg["apellido"];
    $nombre = $arg["nombre"];
    $dni = $arg["dni"];
    $estado = $arg["estado"];

    $usuario = new Usuarios($db);

    $sql = "SELECT id_usuario
    FROM usuarios
    WHERE 1 ";

    if ($apellido != "") {
        $sql .= " AND apellido LIKE '".$apellido."%' ";
    }

    if ($nombre != "") {
        $sql .= " AND nombre LIKE '".$nombre."%' ";
    }

    if ($dni != "") {
        $sql .= " AND dni = ".$dni." ";
    }

    if($estado != "") {
        $sql .= " AND estado LIKE '".trim($estado)."' ";
    }

    $usr = $db->getAll($sql);

    if ($usr == null) {
        $jsondata['success'] = false;
    } else {
        $jsondata['success'] = true;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function alta_usuario($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_usuario = $arg["id_usuario"];
        $usrlogin = $arg["usrlogin"];

        $usuario = new Usuarios($db, $id_usuario);
        $usuario->darAlta($id_usuario);

        //CREA EL NUEVO ESTADO
        $estado = new Log_Estados($db);
        $estado->darAlta($usuario->getClassName(), $id_usuario, $usrlogin);

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "ALTA", $usuario->getClassName(), $id_usuario);

        $jsondata['success'] = true;
    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function baja_usuario($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_usuario = $arg["id_usuario"];
        $usrlogin = $arg["usrlogin"];

        $usuario = new Usuarios($db, $id_usuario);
        $usuario->darBaja($id_usuario);

        //CREA EL NUEVO ESTADO
        $estado = new Log_Estados($db);
        $estado->darBaja($usuario->getClassName(), $id_usuario, $usrlogin);

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "BAJA", $usuario->getClassName(), $id_usuario);

        $jsondata['success'] = true;
    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function ver_registro($arg){
    global $db, $smarty;
    $jsondata = array();

    if(isset($arg) && count($arg) == 5){
        $desde = $arg["desde"];
        $hasta = $arg["hasta"];
        $usr = $arg["usr"];
        $accion = $arg["accion"];
        $clase = $arg["clase"];

        $log =  new Log($db);
        $registros = $log->ver_log($usr, $desde, $hasta, $accion, $clase);

        $smarty->assign("log", $registros);
        $html = $smarty->fetch("../../templates/admin/ver_registro_table.html");

        $jsondata['success'] = true;
        $jsondata['html'] = $html;
    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}
