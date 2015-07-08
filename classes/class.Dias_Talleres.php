<?php

include_once (dirname(__file__) . '/class.BDTable.php');
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Dias_Talleres extends DBTable {

    var $id_dia_taller = "";
    var $inscripto_md5 = "";
    var $className = "Datos_Personales";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Dias_Talleres($db, $id = "") {

        $this->DBTable($db, "dias_talleres");
        $this->className = "Dias_Talleres";
        $this->id_dia_taller = $id;
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

        $this->id_dia_taller = $this->lastInsert("id_dia_taller");
        $datos["id_dia_taller"] = $this->id_dia_taller;
        return $this->id_dia_taller;
    }
    
    function getTalleres($id_taller){
        $sql = "SELECT id_dia FROM dias_talleres WHERE id_taller = $id_taller";
        $taller = $this->consultar($sql);
        return $taller;
    }
}
// fin de clase
?>