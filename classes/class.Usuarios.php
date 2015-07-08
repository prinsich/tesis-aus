<?php
//ini_set("error_reporting",E_ALL); ini_set('display_errors',1);
include_once (dirname(__file__) . '/class.BDTable.php');
include_once ("classes/class.Estados.php");

class Usuarios extends DBTable {

    var $id_usuario = "";
    var $inscripto_md5 = "";
    var $className = "Usuarios";

    /**
     * Constructor de la clase Inscripto
     * 
     * Esta clase permite el manejo de los inscriptos en los distintos congresos o seminarios
     * 
     * @param string $db identificacion de la conexion a la base de datos
     * @param string $id identificador del Inscripto (no obligatorio)
     */
    function Usuarios($db, $id = "") {

        $this->DBTable($db, "usuarios");
        $this->className = "Usuarios";
        $this->id_usuario = $id;
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

        $this->id_usuario = $this->lastInsert("id_usuario");
        $datos["id_usuario"] = $this->id_usuario;
        return $this->id_usuario;
    }
    
    function listar_usuarios(){
        $sql = "SELECT id_usuario, apellido, nombre, nombreusr, perfil, estado
                FROM usuarios
                    JOIN ".BASE_DATA.".perfiles ON usuarios.id_perfil = perfiles.id_perfil
                    JOIN estados ON usuarios.id_usuario = estados.id_sobre
                WHERE sobre like '$this->className' AND activo = 1 
                ORDER BY id_usuario ASC
               ";

        $usuarios = $this->consultar($sql);

        return $usuarios;
    }
    
    function buscar_usuarios($apellido, $nombre, $dni, $estado){
        
        $sql = "SELECT id_usuario, apellido, nombre, nombreusr, perfil, estado
                FROM usuarios
                    JOIN ".BASE_DATA.".perfiles on usuarios.id_perfil = perfiles.id_perfil
                    JOIN estados ON usuarios.id_usuario = estados.id_sobre
                WHERE sobre like '$this->className' AND activo = 1";
        
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

        $sql .= " ORDER BY id_usuario ASC ";
        
        $usuarios = $this->consultar($sql);
        
        return $usuarios;
    }
    
    function getUsuario($id_usuario){
        $sql = "SELECT * 
                FROM usuarios 
                    JOIN ".BASE_DATA.".perfiles on usuarios.id_perfil = perfiles.id_perfil
                WHERE id_usuario = $id_usuario";
        
        $dato_usuario = $this->consultar($sql);
        return $dato_usuario[0];
    }
    
    function getUsuarioLogin($username){
        $dato["nombreusr"] = "admin";
        $dato["perfil"] = "admin";
        return $dato;
    }
    
    function login($username, $password){
        return true;
    }
}
// fin de clase
?>