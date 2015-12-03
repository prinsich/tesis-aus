<?php

include_once (dirname(__file__) . '/class.BDTable.php');

//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);

class Alumno extends DBTable {

    var $id_alumno = "";
    var $inscripto_md5 = "";
    var $className = "Alumno";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Alumno($db, $id = "") {

        $this->DBTable($db, "alumnos");
        $this->className = "Alumno";
        $this->id_alumno = $id;
    }

    /* Metodos para obtenr cantidad de inscriptos y cupos disponibles */

    function countAlumnos() {

        $sql = "select count(*) as cant
			from alumnos";

        $rta = $this->consultarLimitOne($sql, " countAlumnos ");
        return $rta['cant'];
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

        $this->id_alumno = $this->lastInsert("id_alumno");
        $datos["id_alumno"] = $this->id_alumno;
        return $this->id_alumno;
    }

    function listar_alumnos() {
        $sql = "SELECT id_alumno, apellido, nombre, dni, fecha_nacimiento, telefono, estado
                FROM alumnos
                ORDER BY estado, id_alumno ASC";
        
        $alumnos = $this->consultar($sql);
        return $alumnos;
    }

    function buscar_alumnos($apellido, $nombre, $dni, $id_taller, $alta_seguro, $estado) {

        $sql = "SELECT alumnos.id_alumno, apellido, nombre, dni, fecha_nacimiento, telefono, estado
                FROM alumnos 
                    LEFT JOIN taller_alumno ON alumnos.id_alumno = taller_alumno.id_alumno
                WHERE 1";

        if ($apellido != "") {
            $sql .= " AND apellido LIKE '" . trim($apellido) . "%' ";
        }

        if ($nombre != "") {
            $sql .= " AND nombre LIKE '" . trim($nombre) . "%' ";
        }

        if ($dni != "") {
            $sql .= " AND dni = " . $dni . " ";
        }

        if ($id_taller != 0) {
            $sql .= " AND id_taller = " . $id_taller . " ";
        }

        if ($alta_seguro != "") {
            $sql .= " AND alta_seguro LIKE '" . trim($alta_seguro) . "%' ";
        }
        
        if($estado != "") {
            $sql .= " AND estado LIKE '".trim($estado)."' ";
        }

        $sql .= " GROUP BY alumnos.id_alumno ORDER BY alumnos.id_alumno ASC";
        $alumnos = $this->consultar($sql);

        return $alumnos;
    }

    function getAlumno($id_alumno) {
        $sql = "SELECT *
                FROM alumnos 
                    JOIN ".BASE_DATA.".turnos ON alumnos.turno = turnos.id_turno
                WHERE id_alumno = $id_alumno";

        $dato_alumno = $this->consultar($sql);
        return $dato_alumno[0];
    }

    function getID_Datos_Familiares($id_alumno) {
        $sql = "SELECT id_familiar FROM datos_familiares WHERE id_alumno = $id_alumno";

        $id_familiar = $this->consultar($sql);
        return $id_familiar;
    }

    function getID_Datos_Medicos($id_alumno) {
        $sql = "SELECT id_dato_medico FROM datos_medicos WHERE id_alumno = $id_alumno";

        $id_dato_medico = $this->consultar($sql);
        return $id_dato_medico[0]["id_dato_medico"];
    }

    function getID_Datos_Personales($id_alumno) {
        $sql = "SELECT id_personal FROM datos_personales WHERE id_alumno = $id_alumno";

        $id_personal = $this->consultar($sql);
        return $id_personal[0]["id_personal"];
    }
    
    function darAlta($id_usuario){
        $sql = "UPDATE alumnos SET estado = 'ACTIVO' WHERE id_alumno = $id_usuario";
        $this->ejecutar($sql);
    }
    
    function darBaja($id_usuario){
        $sql = "UPDATE alumnos SET estado = 'INACTIVO' WHERE id_alumno = $id_usuario";
        $this->ejecutar($sql);
    }
}

// fin de clase
?>