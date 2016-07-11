<?php
include_once("../../configs/ajaxSmartyBD.php");
include_once("../../configs/auxiliar_function.php");
include_once("../../classes/class.Talleres.php");
include_once("../../classes/class.Dias_Talleres.php");
include_once("../../classes/class.Taller_Alumno.php");
include_once("../../classes/class.Log_Estados.php");
include_once("../../classes/class.Log.php");

/*sql inyection en ajax*/
$datos_post = filter_input_array(INPUT_POST);
if(!sql_inyection_ajax($datos_post, new Log($db), basename($_SERVER['PHP_SELF']))){
    $funcion = filter_input(INPUT_GET, 'funcion');
    call_user_func($funcion, filter_input_array(INPUT_POST));
}

function verficar_disponibilidad($arg){
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 5){
        $accion = $arg["accion"];
        $id_taller = $arg["id_taller"];
        $nombre = $arg["nombre"];
        $id_capacitador = $arg["id_capacitador"];
        $dias = $arg["dias"];

        $taller_existe = false;
        $capacitador_habilitado = true;

        if($accion == "agregar"){
            //VERIFICA SI EXIXTE EL TALLER
            $sql_taller = "SELECT id_taller FROM talleres WHERE nombre LIKE '$nombre'";
            $taller = $db->getAll($sql_taller);
            if($taller != null){
                $taller_existe = true;
            }
        }

        //Verifica q el capacitador no tenga cursos a dictar esos dias
        $sql_capacitador = "SELECT id_taller FROM talleres WHERE id_capacitador = $id_capacitador AND estado LIKE 'ACTIVO'";
        $capacitador = $db->getAll($sql_capacitador);

        if($capacitador != null){
            foreach ($capacitador as $cap_id_taller){
                if($cap_id_taller["id_taller"] != $id_taller){
                    $sql = "SELECT id_dia_taller FROM dias_talleres
                            WHERE id_taller = ".$cap_id_taller["id_taller"]."
                            AND ( ";
                    for($i = 0; $i < count($dias); $i++){
                        if($dias[$i] == 'true'){
                            $index = $i + 1;
                            $sql .= "id_dia = $index or ";
                        }
                    }
                    $sql = substr($sql, 0, -4);
                    $sql .= " )";
                    $dias_taller = $db->getAll($sql);
                    if($dias_taller != null){
                        $capacitador_habilitado = false;
                    }
                }
            }
        }

        if($taller_existe){
            $jsondata['msj'] = "El taller ya existe, elija otro nombre";
            $jsondata['success'] = false;
        } else if(!$capacitador_habilitado) {
            $jsondata['msj'] = "Verificaci&oacute;n Fallida, modifique los d&iacute;as de dictado o el capacitador a cargo";
            $jsondata['success'] = false;
        } else {
            $jsondata['msj'] = "Verificaci&oacute;n Exitosa";
            $jsondata['success'] = true;
        }

    } else {
        $jsondata['msj'] = "Error en la consulta";
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function buscar_talleres($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 3){
        $nombre = $arg["nombre"];
        $id_capacitador = $arg["id_capacitador"];
        $estado = $arg["estado"];

        $taller = new Talleres($db);

        $sql = "SELECT id_taller
                FROM talleres
                WHERE 1 ";

        if ($nombre != "") {
            $sql .= " AND nombre LIKE '$nombre%' ";
        }

        if ($id_capacitador != 0) {
            $sql .= " AND id_capacitador = ".$id_capacitador." ";
        }

        if($estado != "") {
            $sql .= " AND estado LIKE '$estado'";
        }

        $lista_talleres = $db->getAll($sql);

        if ($lista_talleres == NULL) {
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

function baja_taller($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_taller = $arg["id_taller"];
        $usrlogin = $arg["usrlogin"];

        $taller = new Talleres($db, $id_taller);
        $taller->darBaja($id_taller);
        $taller->quitarCapacitador($id_taller);

        $alumno = new Taller_Alumno($db);
        $alumno->borrar("id_taller = $id_taller");

        //CREA EL NUEVO ESTADO
        $estado = new Log_Estados($db);
        $estado->darBaja($taller->getClassName(), $id_taller, $usrlogin);

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "BAJA", $taller->getClassName(), $id_taller);

        $jsondata['success'] = true;

    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function alta_taller($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_taller = $arg["id_taller"];
        $usrlogin = $arg["usrlogin"];

        $taller = new Talleres($db, $id_taller);
        $cap = $taller->checkCapacitador($id_taller);

        if($cap){
            $jsondata['direct_alta'] = true;
            $taller->darAlta($id_taller);
            $jsondata['msj'] = "El taller fue dado de Alta";

        } else {
            $jsondata['direct_alta'] = false;
            $jsondata['id_taller'] = $id_taller;
            $jsondata['msj'] = "Debe elegir un capacitador para poder dar de alta al Taller";
        }

        //CREA EL NUEVO ESTADO
        $estado = new Log_Estados($db);
        $estado->darAlta($taller->getClassName(), $id_taller, $usrlogin);

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "ALTA", $taller->getClassName(), $id_taller);

        $jsondata['success'] = true;

    } else {
        $jsondata['msj'] = "Error en los parametros";
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function reset_taller($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_taller = $arg["id_taller"];
        $usrlogin = $arg["usrlogin"];

        $taller = new Talleres($db, $id_taller);
        $alumno = new Taller_Alumno($db);
        $alumno->borrar("id_taller = $id_taller");

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "RESET TALLER", $taller->getClassName(), $id_taller);

        $jsondata['success'] = true;

    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}
