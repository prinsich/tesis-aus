<?php

include_once("configs/Sajax.php");
include_once("classes/class.Talleres.php");
include_once("classes/class.Dias_Talleres.php");
include_once("classes/class.Taller_Alumno.php");
include_once("classes/class.Log_Estados.php");
include_once("classes/class.Log.php");

sajax_init();
sajax_export("verficar_disponibilidad", "buscar_talleres", "alta_taller", "baja_taller", "reset_taller");

function verficar_disponibilidad($accion, $id_taller, $nombre, $id_capacitador, $dias){
    global $db;
    $tmp = explode(",", $dias);
    
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
                for($i = 0; $i < count($tmp); $i++){
                    if($tmp[$i] == 'true'){
                        $sql .= "id_dia = $i or ";
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
        return "El taller ya existe, elija otro nombre";
    } 
    
    if(!$capacitador_habilitado) {
        return "El capacitador no puede dictar en esos dias";
    }
    
    return "OK";
}

function buscar_talleres($nombre, $id_capacitador, $estado) {
    global $db;
    
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
        return 0;
    } else {
        return 1;
    }
}

function baja_taller($id_taller, $usrlogin) {
    global $db;
    $taller = new Talleres($db, $id_taller);
    $taller->darBaja($id_taller);
    
    $alumno = new Taller_Alumno($db);
    $alumno->borrar("id_taller = $id_taller");
    
    //CREA EL NUEVO ESTADO
    $estado = new Log_Estados($db);
    $estado->darBaja($taller->getClassName(), $id_taller, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "BAJA", $taller->getClassName(), $id_taller);

    return "El taller fue dado de baja";
}

function alta_taller($id_taller, $usrlogin) {
    global $db;
    $taller = new Talleres($db, $id_taller);
    $cap = $taller->checkCapacitador($id_taller);
    
    if($cap){
        $taller->darAlta($id_taller);
        $respuesta = "El taller fue dado de Alta";
    } else {
        $respuesta[0] = $id_taller;
        $respuesta[1] = "Debe elegir un capacitador para poder dar de alta al Taller";
    }
    
    //CREA EL NUEVO ESTADO
    $estado = new Log_Estados($db);
    $estado->darAlta($taller->getClassName(), $id_taller, $usrlogin);
    
    // REGRISTRO EN EL LOG
    $log =  new Log($db);
    $log->crear_registro($usrlogin, "ALTA", $taller->getClassName(), $id_taller);
    
    return $respuesta;
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

