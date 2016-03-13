<?php
include_once("../../configs/ajaxSmartyBD.php");
include_once("../../configs/auxiliar_function.php");
include_once("../../classes/class.Alumno.php");
include_once("../../classes/class.Datos_Familiares.php");
include_once("../../classes/class.Datos_Medicos.php");
include_once("../../classes/class.Datos_Personales.php");
include_once("../../classes/class.Taller_Alumno.php");

include_once("../../classes/class.Log_Estados.php");
include_once("../../classes/class.Log.php");

/*sql inyection en ajax*/
$datos_post = filter_input_array(INPUT_POST);
if(!sql_inyection_ajax($datos_post, new Log($db), basename($_SERVER['PHP_SELF']))){
    $funcion = filter_input(INPUT_GET, 'funcion');
    call_user_func($funcion, filter_input_array(INPUT_POST));
}

function buscar_alumnos($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 6){
        $apellido = $arg["apellido"];
        $nombre = $arg["nombre"];
        $dni = $arg["dni"];
        $id_taller = $arg["id_taller"];
        $alta_seguro = $arg["alta_seguro"];
        $estado = $arg["estado"];


        $sql = "SELECT alumnos.id_alumno
                FROM alumnos JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
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

        if($id_taller != 0) {
          $sql .= " AND id_taller = ".$id_taller." ";
        }

        if($alta_seguro != "") {
          $sql .= " AND alta_seguro LIKE '".$alta_seguro."' ";
        }

        if($estado != "") {
            $sql .= " AND estado LIKE '".trim($estado)."' ";
        }

        $alumnos = $db->getAll($sql);

        if ($alumnos == NULL) {
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

function alta_alumno($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_alumno = $arg["id_alumno"];
        $usrlogin = $arg["usrlogin"];

        $alumno = new Alumno($db, $id_alumno);
        $alumno->darAlta($id_alumno);

        //CREA EL NUEVO ESTADO
        $estado = new Log_Estados($db);
        $estado->darAlta($alumno->getClassName(), $id_alumno, $usrlogin);

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "ALTA", $alumno->getClassName(), $id_alumno);

        $jsondata['success'] = true;
    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}

function baja_alumno($arg) {
    global $db;
    $jsondata = array();

    if(isset($arg) && count($arg) == 2){
        $id_alumno = $arg["id_alumno"];
        $usrlogin = $arg["usrlogin"];

        $alumno = new Alumno($db, $id_alumno);
        $alumno->darBaja($id_alumno);

        //CREA EL NUEVO ESTADO
        $estado = new Log_Estados($db);
        $estado->darBaja($alumno->getClassName(), $id_alumno, $usrlogin);

        // REGRISTRO EN EL LOG
        $log =  new Log($db);
        $log->crear_registro($usrlogin, "BAJA", $alumno->getClassName(), $id_alumno);

        //SE DA DE BAJA A LOS TALLERES ANOTADOS
        $taller_alumno = new Taller_Alumno($db);
        $taller_alumno->darBajaAlumno($id_alumno);

        $jsondata['success'] = true;

    } else {
        $jsondata['success'] = false;
    }

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}
