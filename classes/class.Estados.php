<?php

include_once (dirname(__file__) . '/class.BDTable.php');
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Estados extends DBTable {

    var $id_estado = "";
    var $inscripto_md5 = "";
    var $className = "Estados";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Estados($db, $id = "") {

        $this->DBTable($db, "estados");
        $this->className = "Estados";
        $this->id_estado = $id;
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

        $this->id = $this->lastInsert("id");
        $datos["id"] = $this->id;
        return $this->id;
    }
    
    function darAlta($sobre, $id_sobre, $userlogin){
        
        $this->actualizar_estados_anteriores($sobre, $id_sobre, $userlogin);
       
        $date_time = date("Y-m-d H:i:s");
        
        $datos_estado["estado"] = "ACTIVO";
        $datos_estado["sobre"] = $sobre;
        $datos_estado["id_sobre"] = $id_sobre;
        $datos_estado["usuario_creacion"] = $userlogin;
        $datos_estado["fecha_creacion"] = "$date_time";
        $datos_estado["activo"] = 1;
        
        $this->guardar($datos_estado);
        
    }
    
    function darBaja($sobre, $id_sobre, $userlogin){
        
        $this->actualizar_estados_anteriores($sobre, $id_sobre, $userlogin);
        
        $date_time = date("Y-m-d H:i:s");
        
        $datos_estado["estado"] = "INACTIVO";
        $datos_estado["sobre"] = $sobre;
        $datos_estado["id_sobre"] = $id_sobre;
        $datos_estado["usuario_creacion"] = $userlogin;
        $datos_estado["fecha_creacion"] = "$date_time";
        $datos_estado["activo"] = 1;
        
        $this->guardar($datos_estado);
    }
    
    private function actualizar_estados_anteriores($sobre, $id_sobre, $userlogin){
        $sql = "SELECT id_estado
                FROM estados
                WHERE id_sobre = $id_sobre AND sobre = '$sobre'
                ORDER BY id_estado DESC
                LIMIT 1";
        
        $result = $this->consultar($sql);

        if($result != null){
            $sql = "UPDATE estados 
                    SET activo = 0, usuario_modificacion = UPPER('$userlogin'), fecha_modificacion = '".date("Y-m-d H:i:s")."'
                    WHERE id_estado = ".$result[0]["id_estado"];

            $this->ejecutar($sql);
        }
        
    }
}
// fin de clase
?>