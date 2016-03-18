<?php

include_once dirname(__file__).'/class.BDTable.php';
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Capacitador extends DBTable
{
    public $id_capacitador = '';
    public $inscripto_md5 = '';
    public $className = 'Capacitador';

    /**
     * Constructor de la clase Inscripto.
     *
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     *
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    public function Capacitador($db, $id = '')
    {
        $this->DBTable($db, 'capacitadores');
        $this->className = 'Capacitador';
        $this->id_capacitador = $id;
    }

    /**
     * Metodo guardar.
     *
     * Funcion para guardar un Inscripto en la base de datos
     *
     * @param $datos array conteniendo los datos de un Inscripto
     *
     * @return el id del Inscripto registrado en la base de datos
     */
    public function guardar($datos)
    {
        $this->setRegistro($datos);
        $ok = $this->save();

        $this->id_capacitador = $this->lastInsert('id_capacitador');
        $datos['id_capacitador'] = $this->id_capacitador;

        return $this->id_capacitador;
    }

    public function listar_capacitadores()
    {
        $sql = 'SELECT id_capacitador, apellido, nombre, dni, fecha_nacimiento, telefono, celular, estado
                FROM capacitadores
                WHERE id_capacitador != 0
                ORDER BY apellido, nombre, estado, id_capacitador ASC';

        $capacitadores = $this->consultar($sql);

        return $capacitadores;
    }

    public function buscar_capacitadores($apellido, $nombre, $dni, $estado)
    {
        $sql = 'SELECT id_capacitador, apellido, nombre, dni, fecha_nacimiento, telefono, celular, estado
                FROM capacitadores
                WHERE id_capacitador != 0 ';

        if ($apellido != '') {
            $sql .= " AND apellido LIKE '$apellido%' ";
        }

        if ($nombre != '') {
            $sql .= " AND nombre LIKE '$nombre%' ";
        }

        if ($dni != '') {
            $sql .= " AND dni = $dni ";
        }

        if ($estado != '') {
            $sql .= " AND estado LIKE '$estado' ";
        }

        $sql .= ' ORDER BY estado, id_capacitador ASC ';

        $capacitadores = $this->consultar($sql);

        return $capacitadores;
    }

    public function getCapacitador($id_capacitador)
    {
        $sql = "SELECT * FROM capacitadores WHERE id_capacitador = $id_capacitador";

        $dato_capacitador = $this->consultar($sql);

        return $dato_capacitador[0];
    }

    public function getTalleresDicta($id_capacitador)
    {
        $sql = "SELECT nombre FROM talleres WHERE id_capacitador = $id_capacitador";

        $dato_capacitador = $this->consultar($sql);

        return $dato_capacitador;
    }

    public function darAlta($id_capacitador)
    {
        $sql = "UPDATE capacitadores SET estado = 'ACTIVO' WHERE id_capacitador = $id_capacitador";
        $this->ejecutar($sql);
    }

    public function darBaja($id_capacitador)
    {
        $sql = "UPDATE capacitadores SET estado = 'INACTIVO' WHERE id_capacitador = $id_capacitador";
        $this->ejecutar($sql);
    }
}
// fin de clase
;
