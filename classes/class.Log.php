<?php

include_once dirname(__file__).'/class.BDTable.php';

//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Log extends DBTable
{
    public $id_dia_taller = '';
    public $inscripto_md5 = '';
    public $className = 'Log';

    /**
     * Constructor de la clase Inscripto.
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    public function Log($db, $id = '')
    {
        $this->DBTable($db, 'log');
        $this->className = 'Log';
        $this->id_dia_taller = $id;
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

        $this->id = $this->lastInsert('id');
        $datos['id'] = $this->id;

        return $this->id;
    }

    public function crear_registro($userlog, $accion, $sobre, $id_sobre, $observacion = '')
    {
        $datos_log['user'] = $userlog;
        $datos_log['date_time'] = ''.date('Y-m-d H:i:s').'';
        $datos_log['action'] = $accion;
        $datos_log['sobre'] = $sobre;
        $datos_log['id_sobre'] = $id_sobre;
        $datos_log['observaciones'] = $observacion;

        $this->guardar($datos_log);
    }

    public function ver_log($user = '', $date_time_start = '', $date_time_end = '', $action = '', $sobre = '')
    {
        $date_time_start = $this->formatoFechaBD($date_time_start);
        $date_time_end = $this->formatoFechaBD($date_time_end);

        //UN SQL POR CLASE
        $sql_alumno = "SELECT id_log, user, date_time, action, sobre , CONCAT(apellido, ', ', nombre, ' [id = ', id_alumno, ']') AS objeto, observaciones
                        FROM log JOIN alumnos ON log.id_sobre = alumnos.id_alumno 
                        WHERE sobre LIKE 'ALUMNO'";

        $sql_capacitador = "SELECT id_log, user, date_time, action, sobre , CONCAT(apellido, ', ', nombre, ' [id = ', id_capacitador, ']') AS objeto, observaciones
                        FROM log JOIN capacitadores ON log.id_sobre = capacitadores.id_capacitador 
                        WHERE sobre LIKE 'CAPACITADOR'";

        $sql_taller = "SELECT id_log, user, date_time, action, sobre , CONCAT(nombre, ' [id = ', id_taller, ']') AS objeto, observaciones
                        FROM log JOIN talleres ON log.id_sobre = talleres.id_taller
                        WHERE sobre LIKE 'TALLERES'";

        $sql_usuarios = "SELECT id_log, user, date_time, action, sobre , CONCAT(apellido, ', ', nombre, ' [id = ', id_usuario, ']') AS objeto, observaciones
                        FROM log JOIN usuarios ON log.id_sobre = usuarios.id_usuario
                        WHERE sobre LIKE 'USUARIOS'";

        //CONDICIONES DE WHERE
        $sql_WHERE = '';

        if ($user != '') {
            $sql_WHERE .= " AND user LIKE '$user' ";
        }

        if ($date_time_start != '' && $date_time_end != '') {
            $sql_WHERE .= " AND BETWEEN $date_time_start AND $date_time_end ";
        } elseif ($date_time_start == '' && $date_time_end != '') {
            $sql_WHERE .= " AND BETWEEN CURRENT_DATE AND $date_time_end ";
        } elseif ($date_time_start != '' && $date_time_end == '') {
            $sql_WHERE .= " AND BETWEEN $date_time_start AND CURRENT_DATE ";
        }

        if ($action != '') {
            $sql_WHERE .= " AND action LIKE '$action' ";
        }

        //CONCATENACION DE SQL
        $sql = '';
        switch ($sobre) {
            case 'ALUMNO':
                $sql .= $sql_alumno.$sql_WHERE;
                break;
            case 'CAPACITADOR':
                $sql .= $sql_capacitador.$sql_WHERE;
                break;
            case 'TALLERES':
                $sql .= $sql_taller.$sql_WHERE;
                break;
            case 'USUARIOS':
                $sql .= $sql_usuarios.$sql_WHERE;
                break;
            default:
                $sql .= $sql_alumno.$sql_WHERE;
                $sql .= ' UNION ';
                $sql .= $sql_capacitador.$sql_WHERE;
                $sql .= ' UNION ';
                $sql .= $sql_taller.$sql_WHERE;
                $sql .= ' UNION ';
                $sql .= $sql_usuarios.$sql_WHERE;
                break;
        }

        $sql .= ' ORDER BY `id_log` ASC ';

        $result = $this->consultar($sql);

        return $result;
    }

    public function getClases()
    {
        $sql = 'SELECT sobre FROM log GROUP BY sobre';
        $result = $this->consultar($sql);

        $clases = [];
        foreach ($result as $clase) {
            array_push($clases, $clase['sobre']);
        }

        return $clases;
    }
}

// fin de clase
;
