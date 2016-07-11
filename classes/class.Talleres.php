<?php

include_once dirname(__file__).'/class.BDTable.php';
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Talleres extends DBTable
{
    public $id_taller = '';
    public $inscripto_md5 = '';
    public $className = 'Talleres';

    /**
     * Constructor de la clase Inscripto.
     *
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     *
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    public function Talleres($db, $id = '')
    {
        $this->DBTable($db, 'talleres');
        $this->className = 'Talleres';
        $this->id_taller = $id;
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

        $this->id_taller = $this->lastInsert('id_taller');
        $datos['id_taller'] = $this->id_taller;

        return $this->id_taller;
    }

    public function listar_talleres()
    {
        $sql = "SELECT talleres.id_taller, talleres.nombre, CONCAT(capacitadores.apellido,', ',capacitadores.nombre) AS capacitador, COUNT(id_alumno) AS cant_alumnos, talleres.estado
                FROM talleres
                    JOIN capacitadores ON talleres.id_capacitador = capacitadores.id_capacitador
                    LEFT JOIN taller_alumno ON talleres.id_taller = taller_alumno.id_taller
                GROUP BY talleres.id_taller
                ORDER BY talleres.estado, talleres.id_taller, talleres.nombre ASC";

        $lista_talleres = $this->consultar($sql);

        return $lista_talleres;
    }

    public function listar_dias($id_taller)
    {
        $sql = "SELECT id_taller, talleres.nombre, CONCAT(capacitadores.apellido,', ',capacitadores.nombre) AS capacitador
                FROM talleres
                    JOIN capacitadores ON talleres.id_capacitador = capacitadores.id_capacitador";

        $lista_talleres = $this->consultar($sql);

        return $lista_talleres;
    }

    public function cantidad_alumnos_por_taller()
    {
        $sql = 'SELECT id_taller, COUNT(id_alumno) AS cant_alumnos FROM `taller_alumno` GROUP BY id_taller ORDER BY id_taller';
        $cantidad = $this->consultar($sql);

        return $cantidad;
    }

    public function getTaller($id_taller)
    {
        $sql = "SELECT * FROM talleres WHERE id_taller = $id_taller";
        $taller = $this->consultar($sql);

        return $taller[0];
    }

    public function getTaller2($id_taller)
    {
        $sql = "SELECT talleres.nombre AS taller, CONCAT(capacitadores.apellido,', ',capacitadores.nombre) AS capacitador
               FROM talleres JOIN capacitadores ON talleres.id_capacitador = capacitadores.id_capacitador
               WHERE id_taller = $id_taller";
        $taller = $this->consultar($sql);

        return $taller[0];
    }

    public function buscar_talleres($nombre, $id_capacitador, $estado)
    {
        $sql = "SELECT talleres.id_taller, talleres.nombre, CONCAT(capacitadores.apellido,', ',capacitadores.nombre) AS capacitador, COUNT(id_alumno) AS cant_alumnos, talleres.estado
                FROM talleres
                    JOIN capacitadores ON talleres.id_capacitador = capacitadores.id_capacitador
                    LEFT JOIN taller_alumno ON talleres.id_taller = taller_alumno.id_taller
                WHERE 1";

        if ($nombre != '') {
            $sql .= " AND talleres.nombre LIKE '$nombre%' ";
        }

        if ($id_capacitador != 0) {
            $sql .= ' AND talleres.id_capacitador = '.$id_capacitador.' ';
        }

        if ($estado != '') {
            $sql .= " AND talleres.estado LIKE '$estado' ";
        }

        $sql .= ' GROUP BY talleres.id_taller ORDER BY talleres.estado, id_taller, talleres.nombre  ASC';

        $lista_talleres = $this->consultar($sql);

        return $lista_talleres;
    }

    public function darAlta($id_taller)
    {
        $sql = "UPDATE talleres SET estado = 'ACTIVO' WHERE id_taller = $id_taller";
        $this->ejecutar($sql);
    }

    public function darBaja($id_taller)
    {
        $sql = "UPDATE talleres SET estado = 'INACTIVO' WHERE id_taller = $id_taller";
        $this->ejecutar($sql);
    }

    public function quitarCapacitador($id_taller)
    {
        $sql = "UPDATE talleres SET id_capacitador = 0 WHERE id_taller = $id_taller";
        $this->ejecutar($sql);
    }

    public function checkCapacitador($id_taller)
    {
        $sql = "SELECT id_capacitador FROM talleres  WHERE id_taller = $id_taller";
        $result = $this->consultar($sql);
        if ($result[0]['id_capacitador'] != 0) {
            return true;
        } else {
            return false;
        }
    }
}
// fin de clase
;
