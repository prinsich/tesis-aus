<?php

include_once (dirname(__file__) . '/class.BDTable.php');
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Taller_Alumno extends DBTable {

    var $id_taller_alumno = "";
    var $inscripto_md5 = "";
    var $className = "Taller_Alumno";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Taller_Alumno($db, $id = "") {

        $this->DBTable($db, "taller_alumno");
        $this->className = "Taller_Alumno";
        $this->id_taller_alumno = $id;
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

        $this->id_dia_taller = $this->lastInsert("id_taller_alumno");
        $datos["id_taller_alumno"] = $this->id_dia_taller;
        return $this->id_dia_taller;
    }
    
    function getID($id_alumno, $id_taller){
        $sql = "SELECT id_taller_alumno
                FROM taller_alumno
                WHERE id_alumno = $id_alumno AND id_taller = $id_taller";
        
        $id_taller_alumno =  $this->consultar($sql);
        if($id_taller_alumno != null)
        return $id_taller_alumno[0]["id_taller_alumno"];
    }
    
    function getTalleres($id_alumno){
        $sql = "SELECT id_taller
                FROM taller_alumno
                WHERE id_alumno = $id_alumno";
        
        $id_taller_alumno =  $this->consultar($sql);
        return $id_taller_alumno;   
    }
    
    function getTalleresName($id_alumno){
        $sql = "SELECT nombre
                FROM taller_alumno JOIN talleres ON taller_alumno.id_taller = talleres.id_taller
                WHERE id_alumno = $id_alumno";
        
        $id_taller_alumno =  $this->consultar($sql);
        return $id_taller_alumno;
        
    }
}
// fin de clase
?>