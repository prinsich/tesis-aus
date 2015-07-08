<?php

include_once (dirname(__file__) . '/class.BDTable.php');
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Datos_Familiares extends DBTable {

    var $id_familiar = "";
    var $inscripto_md5 = "";
    var $className = "Datos_Familiares";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Datos_Familiares($db, $id = "") {

        $this->DBTable($db, "datos_familiares");
        $this->className = "Datos_Familiares";
        $this->id_familiar = $id;
    }

    /**
     * Metodo guardar
     *
     * Funcion para guardar un Inscripto en la base de datos
     *
     * @param $datos array conteniendo los datos de un Inscripto
     * @return el id del Inscripto registrado en la base de datos
     */
    function guardar($datos) {
        
        $this->setRegistro($datos);
        $ok = $this->save();

        $this->id_familiar = $this->lastInsert("id_familiar");
        $datos["id_familiar"] = $this->id_familiar;
        return $this->id_familiar;
    }
    
    function getDatosFamiliares($id_alumno){
        $sql = "SELECT * 
                FROM datos_familiares JOIN ".BASE_DATA.".estado_civil ON datos_familiares.estado_civil = estado_civil.id_est_civil
                WHERE id_alumno = $id_alumno";
        
        $dato_familiares = $this->consultar($sql);
        return $dato_familiares;
    }
    
    function cantidad_familiares($id_alumno){
        $sql = "SELECT COUNT(id_familiar) AS cant_familiar FROM datos_familiares WHERE id_alumno = $id_alumno";
        $dato_familiares = $this->consultar($sql);
        return $dato_familiares[0]["cant_familiar"];
    }
}
// fin de clase
?>