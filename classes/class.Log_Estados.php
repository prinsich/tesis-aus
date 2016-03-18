<?php

include_once dirname(__file__).'/class.BDTable.php';
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Log_Estados extends DBTable
{
    public $id_estado = '';
    public $inscripto_md5 = '';
    public $className = 'Log_Estados';

    /**
     * Constructor de la clase Inscripto.
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    public function Log_Estados($db, $id = '')
    {
        $this->DBTable($db, 'log_estados');
        $this->className = 'Log_Estados';
        $this->id_estado = $id;
    }

    public function guardar($datos)
    {
        $this->setRegistro($datos);
        $ok = $this->save();

        $this->id_alumno = $this->lastInsert('id_estado');
        $datos['id_estado'] = $this->id_estado;

        return $this->id_estado;
    }

    public function darAlta($sobre, $id_sobre, $userlogin)
    {
        $date_time = date('Y-m-d H:i:s');

        $datos_estado['estado'] = 'ACTIVO';
        $datos_estado['sobre'] = $sobre;
        $datos_estado['id_sobre'] = $id_sobre;
        $datos_estado['usuario_creacion'] = $userlogin;
        $datos_estado['fecha_creacion'] = "$date_time";

        $this->guardar($datos_estado);
    }

    public function darBaja($sobre, $id_sobre, $userlogin)
    {
        $date_time = date('Y-m-d H:i:s');

        $datos_estado['estado'] = 'INACTIVO';
        $datos_estado['sobre'] = $sobre;
        $datos_estado['id_sobre'] = $id_sobre;
        $datos_estado['usuario_creacion'] = $userlogin;
        $datos_estado['fecha_creacion'] = "$date_time";

        $this->guardar($datos_estado);
    }
}
// fin de clase
;
