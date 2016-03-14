<?php
/**
 *   clase ConexionBD
 */
// Define constantes de todas las bases de datos que se usan //
define("BASE_TESIS_AUS", "tesis-aus");
define("BASE_DATA", "`tesis-aus-data`");

define("HOST_BD", "localhost");
$database["cdmon"]["user"] = 'myaus7781';
$database["cdmon"]["pass"] = 'wNmSHhtE';

$database["localhost"]["user"] = 'root';
$database["localhost"]["pass"] = 'root';

if($_SERVER['SERVER_NAME'] == 'localhost'){
	$database_used = $database["localhost"];
} else {
	$database_used = $database["cdmon"];
}


/////////////////////////////////////////////////////////////
define("DB_FETCHMODE_ORDERED", "3");
define("DB_FETCHMODE_ASSOC", "2");

class ConexionBD extends PDO {

    var $ultima_consulta;
    var $dsn = "";
    var $user = "";
    var $pass = "";
    var $bdd = "";
    var $conexion = "";

    // funcion conectar
    // si no falla devuelve un objeto conexion
    function conectar() {

          try {
            $this->conexion = new PDO($this->dsn["conexion"], $this->user, $this->pass, array(PDO::ATTR_PERSISTENT => false));
            return $this;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function ConexionBD($base = BASE_TESIS_AUS) {
        global $database_used;
        try {
            $tipobdd = 'mysql';
            $host = HOST_BD ; 

            $this->user = $database_used['user'];
            $this->pass = $database_used['pass'];

            $this->bdd = $base;
            $this->dsn["conexion"] = $tipobdd . ":host=" . $host . ";dbname=" . $base;
            $this->dsn["database"] = $base;

            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function getAll($sql) {

        try {
            $this->ultima_consulta = $this->conexion->prepare($sql);
            $this->ultima_consulta->execute();

            $result = $this->ultima_consulta->fetchAll();
            return $result;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function query($sql) {
        try {
            $this->ultima_consulta = $this->conexion->prepare($sql);
            $this->ultima_consulta->execute();
            return $this;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function numRows() {
        try {
            return $this->ultima_consulta->rowCount();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function fetchRow($modo = "4") {
        try {
            return $this->ultima_consulta->fetch($modo);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function tableInfoTabla($tabla) {
        try {
            $this->ultima_consulta = $this->conexion->prepare("DESCRIBE " . $tabla);
            $this->ultima_consulta->execute();
            $contador = 0;
            $table_fields = array();
            while ($fila = $this->ultima_consulta->fetch(PDO::FETCH_BOTH, PDO::FETCH_ORI_NEXT)) {
                $campo = "";

                $campo["name"] = $fila['Field'];
                if (strlen(substr($fila['Type'], 0, strpos($fila['Type'], "("))) > 0)
                    $campo["type"] = substr($fila['Type'], 0, strpos($fila['Type'], '('));
                else
                    $campo["type"] = $fila['Type'];

                $campo["type"] = $this->translateNativeType(strtoupper($campo["type"]));

                $table_fields[$contador] = $campo;
                $contador++;
            }
            return $table_fields;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function tableInfoSql($resultado) {
        try {
            $resultado_final = array();
            for ($i = 0; $i < $resultado->columnCount(); $i++) {
                $valor = $resultado->getColumnMeta($i);
                $campo = "";
                $campo["name"] = $valor["name"];
                $campo["type"] = $this->translateNativeType(strtoupper($valor["native_type"]));
                $resultado_final[$i] = $campo;
            }
            $table_fields = $resultado_final;
            return $table_fields;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function tableInfo($sql) {
        try {
            if (is_object($sql)) {
                // die(var_export($sql, TRUE));
                return $this->tableInfoSql($sql->ultima_consulta);
            }
            else
                return $this->tableInfoTabla($sql);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function getAssoc($sql) {
        try {

            $resu = $this->query($sql);


            // die(var_export($resu->ultima_consulta->fetchAll(2), TRUE));

            return $resu->ultima_consulta->fetchAll(PDO::FETCH_KEY_PAIR);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function getOne($sql) {
        try {
            $this->ultima_consulta = $this->conexion->prepare($sql);
            $this->ultima_consulta->execute();

            $result = $this->ultima_consulta->fetch();
            return $result[0];
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function isError() {
        return false;
    }

    function __toString() {
        return "";
    }

    function translateNativeType($orig) {
        $trans = array(
            'VAR_STRING' => 'string',
            'VARCHAR' => 'string',
            'STRING' => 'string',
            'CHAR' => 'string',
            'YEAR' => 'string',
            'TINYBLOB' => 'string',
            'TINYTEXT' => 'string',
            'BLOB' => 'string',
            'TEXT' => 'string',
            'MEDIUMBLOB' => 'string',
            'MEDIUMTEXT' => 'string',
            'LONGBLOB' => 'string',
            'LONGTEXT' => 'string',
            'ENUM' => 'enum',
            'SET' => 'set',
            'BLOB' => 'blob',
            'LONGLONG' => 'int',
            'LONG' => 'int',
            'INT' => 'int',
            'TINYINT' => 'int',
            'MEDIUMINT' => 'int',
            'INTEGER' => 'int',
            'BIGINT' => 'int',
            'SHORT' => 'int',
            'SMALLINT' => 'int',
            'NUMERIC' => 'int',
            'DATETIME' => 'datetime',
            'DATE' => 'date',
            'DOUBLE' => 'real',
            'DOUBLE-PRECISION' => 'real',
            'REAL' => 'real',
            'DECIMAL' => 'real',
            'FLOAT ' => 'real',
            'TIMESTAMP' => 'timestamp',
            'TIME ' => 'time'
        );
        return $trans[$orig];
    }

}

//  fin clase ConexionBD
?>