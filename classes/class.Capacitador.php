<?php

include_once (dirname(__file__) . '/class.BDTable.php');
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Capacitador extends DBTable {

    var $id_capacitador = "";
    var $inscripto_md5 = "";
    var $className = "Capacitador";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Capacitador($db, $id = "") {

        $this->DBTable($db, "capacitadores");
        $this->className = "Capacitador";
        $this->id_capacitador = $id;
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

        $this->id_capacitador = $this->lastInsert("id_capacitador");
        $datos["id_capacitador"] = $this->id_capacitador;
        return $this->id_capacitador;
    }
    
    function listar_capacitadores(){
        $sql = "SELECT id_capacitador, apellido, nombre, dni, fecha_nacimiento, telefono, celular, estado
                FROM capacitadores
                    JOIN estados ON capacitadores.id_capacitador = estados.id_sobre
                WHERE sobre LIKE '$this->className' AND activo = 1
                ORDER BY id_capacitador ASC";

        $capacitadores = $this->consultar($sql);
        return $capacitadores;
    }
    
    function buscar_capacitadores($apellido, $nombre, $dni, $estado){
        
        $sql = "SELECT id_capacitador, apellido, nombre, dni, fecha_nacimiento, telefono, celular, estado
                FROM capacitadores
                    JOIN estados ON capacitadores.id_capacitador = estados.id_sobre
                WHERE sobre LIKE '$this->className' AND activo = 1 ";
        
        if($apellido != "") {
            $sql .= " AND UPPER(apellido) LIKE '%".trim($apellido)."%' ";
        }
        
        if($nombre != "") {
            $sql .= " AND UPPER(nombre) LIKE '%".trim($nombre)."%' ";
        }
        
        if($dni != "") {
            $sql .= " AND UPPER(dni) LIKE '%".trim($dni)."%' ";
        }
        
        if($estado != "") {
            $sql .= " AND UPPER(estado) LIKE '".trim($estado)."' ";
        }
        
        $sql .= " ORDER BY id_capacitador ASC ";
        
        $capacitadores = $this->consultar($sql);
        
        return $capacitadores;
    }
    
    function getCapacitador($id_capacitador){
        $sql = "SELECT * FROM capacitadores WHERE id_capacitador = $id_capacitador";
        
        $dato_capacitador = $this->consultar($sql);
        return $dato_capacitador[0];
    }
    
    function getTalleresDicta($id_capacitador){
        $sql = "SELECT nombre FROM talleres WHERE id_capacitador = $id_capacitador";
        
        $dato_capacitador = $this->consultar($sql);
        return $dato_capacitador;
    }
}
// fin de clase
?>