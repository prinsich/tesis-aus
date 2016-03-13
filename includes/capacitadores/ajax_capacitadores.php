<?php
include_once("../../configs/ajaxSmartyBD.php");
include_once("../../configs/auxiliar_function.php");
include_once("../../classes/class.Capacitador.php");
include_once("../../classes/class.Talleres.php");
include_once("../../classes/class.Log_Estados.php");
include_once("../../classes/class.Log.php");

/*sql inyection en ajax*/
$datos_post = filter_input_array(INPUT_POST);
if(!sql_inyection_ajax($datos_post, new Log($db), basename($_SERVER['PHP_SELF']))){
    $funcion = filter_input(INPUT_GET, 'funcion');
    call_user_func($funcion, filter_input_array(INPUT_POST));
}

function buscar_capacitadores($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 4){
        $apellido = $arg["apellido"];
        $nombre = $arg["nombre"];
        $dni = $arg["dni"];
        $estado = $arg["estado"];

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

        if ($capacitadores == NULL) {
            $jsondata['success'] = false;
        } else {
            $jsondata['success'] = true;
        }
    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function alta_capacitador($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_capacitador = $arg["id_capacitador"];
        $usrlogin = $arg["usrlogin"];

        $capacitador = new Capacitador($db, $id_capacitador);
        $capacitador->darAlta($id_capacitador);

        //CREA EL NUEVO ESTADO
        $estado = new Log_Estados($db);
        $estado->darAlta($capacitador->getClassName(), $id_capacitador, $usrlogin);

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "ALTA", $capacitador->getClassName(), $id_capacitador);

        $jsondata['success'] = true;

    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();

    //return "El capacitador fue dado de alta";
}

function baja_capacitador($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_capacitador = $arg["id_capacitador"];
        $usrlogin = $arg["usrlogin"];

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

        $jsondata['success'] = true;

    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();


    return "El capacitador fue dado de baja";
}
