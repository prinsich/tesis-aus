<?php

include_once dirname(__file__).'/class.BDTable.php';
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Datos_Personales extends DBTable
{
    public $id_personal = '';
    public $inscripto_md5 = '';
    public $className = 'Datos_Personales';

    /**
     * Constructor de la clase Inscripto.
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    public function Datos_Personales($db, $id = '')
    {
        $this->DBTable($db, 'datos_personales');
        $this->className = 'Datos_Personales';
        $this->id_personal = $id;
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

        $this->id_personal = $this->lastInsert('id_personal');
        $datos['id_personal'] = $this->id_personal;

        return $this->id_personal;
    }

    public function getDatosPerosnales($id_alumno)
    {
        $sql = "SELECT * FROM datos_personales WHERE id_alumno = $id_alumno";

        $datos_personales = $this->consultar($sql);
        if ($datos_personales == null) {
            return;
        } else {
            return $datos_personales[0];
        }
    }
}
// fin de clase
;
