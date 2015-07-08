<?php

include_once (dirname(__file__) . '/class.BDTable.php');
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Datos_Medicos extends DBTable {

    var $id_dato_medico = "";
    var $inscripto_md5 = "";
    var $className = "Datos_Medicos";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Datos_Medicos($db, $id = "") {

        $this->DBTable($db, "datos_medicos");
        $this->className = "Datos_Medicos";
        $this->id_dato_medico = $id;
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

        $this->id_dato_medico = $this->lastInsert("id_dato_medico");
        $datos["id_dato_medico"] = $this->id_dato_medico;
        return $this->id_dato_medico;
    }
    
    function getDatosMedicos($id_alumno){
        $sql = "SELECT * 
                FROM datos_medicos JOIN ".BASE_DATA.".grupo_sanguineos ON datos_medicos.grupo_sanguineo = grupo_sanguineos.id_grupo_sanguineo
                WHERE id_alumno = $id_alumno";
        
        $datos_medicos = $this->consultar($sql);
        if($datos_medicos != null)
            return $datos_medicos[0];
    }
}
// fin de clase
?>