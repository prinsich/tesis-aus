<?php
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);
include_once dirname(__file__).'/class.BDTable.php';
include_once dirname(__file__).'/class.Log_Estados.php';

class Usuarios extends DBTable
{
    public $id_usuario = '';
    public $inscripto_md5 = '';
    public $className = 'Usuarios';

    /**
     * Constructor de la clase Inscripto.
     *
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     *
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    public function Usuarios($db, $id = '')
    {
        $this->DBTable($db, 'usuarios');
        $this->className = 'Usuarios';
        $this->id_usuario = $id;
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

        $this->id_usuario = $this->lastInsert('id_usuario');
        $datos['id_usuario'] = $this->id_usuario;

        return $this->id_usuario;
    }

    public function listar_usuarios()
    {
        $sql = 'SELECT id_usuario, apellido, nombre, nombreusr, perfil, estado
                FROM usuarios
                    JOIN '.BASE_DATA.'.perfiles ON usuarios.id_perfil = perfiles.id_perfil
                ORDER BY estado, id_usuario, apellido, nombre ASC
               ';

        $usuarios = $this->consultar($sql);

        return $usuarios;
    }

    public function buscar_usuarios($apellido, $nombre, $dni, $estado)
    {
        $sql = 'SELECT id_usuario, apellido, nombre, nombreusr, perfil, estado
                FROM usuarios
                    JOIN '.BASE_DATA.'.perfiles on usuarios.id_perfil = perfiles.id_perfil
                WHERE 1 ';

        if ($apellido != '') {
            $sql .= " AND apellido LIKE '".$apellido."%' ";
        }

        if ($nombre != '') {
            $sql .= " AND nombre LIKE '".$nombre."%' ";
        }

        if ($dni != '') {
            $sql .= ' AND dni = '.$dni.' ';
        }

        if ($estado != '') {
            $sql .= " AND estado LIKE '".trim($estado)."' ";
        }

        $sql .= ' ORDER BY estado, id_usuario, apellido, nombre ASC ';

        $usuarios = $this->consultar($sql);

        return $usuarios;
    }

    public function getUsuario($id_usuario)
    {
        $sql = 'SELECT *
                FROM usuarios
                    JOIN '.BASE_DATA.".perfiles on usuarios.id_perfil = perfiles.id_perfil
                WHERE id_usuario = $id_usuario";

        $dato_usuario = $this->consultar($sql);

        return $dato_usuario[0];
    }

    public function getUsuarioName($usrname)
    {
        $sql = 'SELECT *
                FROM usuarios
                    JOIN '.BASE_DATA.".perfiles on usuarios.id_perfil = perfiles.id_perfil
                WHERE nombreusr LIKE '$usrname'";

        $dato_usuario = $this->consultar($sql);

        return $dato_usuario[0];
    }

    public function getUsuarioLogin($username)
    {
        $sql = 'SELECT nombreusr, perfil FROM usuarios JOIN '.BASE_DATA.".perfiles ON usuarios.id_perfil = perfiles.id_perfil WHERE nombreusr LIKE '$username'";
        $user = $this->consultar($sql);

        return $user[0];
    }

    public function login($username, $password)
    {
        $sql = "SELECT id_usuario FROM usuarios WHERE nombreusr LIKE '$username' AND passusr LIKE '$password'";
        $login = $this->consultar($sql);
        if ($login == null) {
            return false;
        } else {
            return true;
        }
    }

    public function usrExist($username)
    {
        $sql = "SELECT id_usuario FROM usuarios WHERE nombreusr LIKE '$username'";
        $login = $this->consultar($sql);
        if ($login == null) {
            return false;
        } else {
            return true;
        }
    }

    public function setPassword($username, $password)
    {
        $sql = "UPDATE usuarios SET passusr = '$password' WHERE nombreusr LIKE '$username' ";
        $this->ejecutar($sql);
    }

    public function darAlta($id_usuario)
    {
        $sql = "UPDATE usuarios SET estado = 'ACTIVO' WHERE id_usuario = $id_usuario";
        $this->ejecutar($sql);
    }

    public function darBaja($id_usuario)
    {
        $sql = "UPDATE usuarios SET estado = 'INACTIVO' WHERE id_usuario = $id_usuario";
        $this->ejecutar($sql);
    }
}
// fin de clase
;
