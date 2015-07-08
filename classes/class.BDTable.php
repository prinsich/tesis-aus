<?php

class DBTable {

    var $db;
    var $className = "DBTable";
    var $table = "";
    var $fields = array(); //array con los campos
    var $dates = array(); // guarda los campos fechas ??
    var $original = array(); // cuando busca para por findregistro guarda los datos original 
    var $mensaje = "";
    var $tiposave = "";

    /* =============================================================================================
      FUNCTION 	DBTable: constructor
      ============================================================================================== */

    function DBTable($db, $nombreTabla = "") {
        $this->db = $db;
        $this->table = $nombreTabla;
        $this->fields = array();
        $this->dates = array();
        $this->original = array();
        $this->estructuraDB();
        $this->mensaje = "";
        $this->tiposave = "";
    }
    
    function getClassName(){
        return $this->className;
    }

    /* =============================================================================================
      FUNCTION estructuraDB:  carga la estructura de la tabla
      ============================================================================================== */

    function estructuraDB() {
        if ($this->table != "") {
            /* print_r($this->table);
              print_r("---"); */
            $result = $this->db->tableInfo($this->table);

            for ($i = 0; $i < count($result); $i++) {
                if ($result[$i]['type'] == "date" || $result[$i]['type'] == "datetime") {
                    array_push($this->dates, $result[$i]['name']);
                }

                $this->$result[$i]['name'] = "";
                array_push($this->fields, $result[$i]['name']);
            }
        }
    }

    /* =============================================================================================
      FUNCTION 	setTable:  setea nueva tabla
      ============================================================================================== */

    function setTable($nombreTabla) {
        $this->table = $nombreTabla;
        $this->fields = array();
        $this->dates = array();
        $this->original = array();
        $this->estructuraDB();
        $this->mensaje = "";
    }

    /* =============================================================================================
      FUNCTION 	utlimoMensaje:
      ============================================================================================== */

    function utlimoMensaje() {
        return $this->mensaje;
    }

    /* =============================================================================================
      FUNCTION 	borrar: borra registro
      ============================================================================================== */

    function borrar($where = "", $mensaje = "") {
        $sql = " DELETE FROM  " . $this->table;
        if ($where != "") {
            $sql .= " where " . $where;
        }
        $ok = $this->ejecutar($sql, $mensaje);
        return $ok;
    }

    /* =============================================================================================
      FUNCTION 	save: inserta / acturaliza un resitro
      ============================================================================================== */

    function save() {
        $sql = "INSERT INTO " . $this->table . " (" . implode(',', $this->fields) . ") VALUES (";
        $valor = "";
        foreach ($this->fields as $key => $field) {
            $valor = $this->$field;
            if (in_array($field, $this->dates)) { // cambia formato fecha
                if ($this->$field != "" && $this->$field != "0000-00-00" && $this->$field != "00-00-0000" && $this->$field != null){
                    $valor = $this->formatoFechaHoraBD($this->$field);
                }else{
                    $valor = "0000-00-00";
                }
            }

            //	$sql .= ' "' . $valor  . '",';
            $sql .= ' "' . addslashes($valor) . '",';
        }

        $sql = substr($sql, 0, strlen($sql) - 1); // remove trailing comma
        $sql .= ") ";
        $sql .= " ON DUPLICATE KEY UPDATE ";
        foreach ($this->fields as $field) {
            $valor = $this->$field;
            if (in_array($field, $this->dates)) {// cambia formato fecha
                if ($this->$field != "" && $this->$field != "0000-00-00" && $this->$field != "00-00-0000" && $this->$field != null){
                    $valor = $this->formatoFechaHoraBD($this->$field);
                } else {
                    $valor = "0000-00-00";
                }
            }
            $sql .= ' ' . $field . ' = ';
            $sql .= ' "' . addslashes($valor) . '",';
        }

        $sql = substr($sql, 0, strlen($sql) - 1); // remove trailing comma

        $result = $this->ejecutar($sql, " - save/update - ");
        $nrorow = $this->tipo_save();
        if ($nrorow == 1) {
            return true;
        } elseif ($nrorow == 2) {   //$ok = $this->actualizodatos();
            return true;
        }
        return false;
    }

    /* =============================================================================================
      FUNCTION 	actualizodatos
      ============================================================================================== */

    function actualizodatos() {
        $modifica = false;

        if (!empty($this->original)) {
            foreach ($this->original as $field_name => $field_value) {
                if ($this->original[$field_name] != $this->$field_name) {
                    $modifica = true;
                }
            }
        }
        return $modifica;
    }

    /* =============================================================================================
      FUNCTION 	cadenaInsert
      ============================================================================================== */

    function cadenaInsert($sql) {
        $salida = $this->consultar($sql);
        if (count($salida) == 0) {
            return "";
        }
        $sql = "INSERT INTO ";
        $sql .= $this->table . " (" . implode(',', $this->fields) . ") ";
        $sql .= " VALUES ";
        for ($i = 0; $i < count($salida); $i++) {
            $sql .= "(";
            $this->setRegistro($salida[$i]);
            foreach ($this->fields as $key => $field) {
                $sql .= "'" . $this->$field . "',";
            }
            $sql = substr($sql, 0, strlen($sql) - 1); // remove trailing comma
            $sql .= ")";
            if ($i != count($salida) - 1)
                $sql .= ",";
        }
        $sql .= ";";
        return $sql;
    }

    /* =============================================================================================
      FUNCTION 	ultimoInsert : ultimo inserta
      ============================================================================================== */

    function ultimoInsert() {
        $sql = 'select LAST_INSERT_ID()';
        $id = $this->db->getOne($sql);
        return $id;
    }

    /* =============================================================================================
      FUNCTION 	ultimoInsert : ultimo inserta
      ============================================================================================== */

    function lastInsert($campoId = "") {
        if ($this->tiposave == 2) {
            $salida = $this->$campoId;
        } else {  //if ($campoId == "") 
            $sql = "SELECT LAST_INSERT_ID() AS id ";
            $salida = $this->consultarOne($sql);
            $this->$campoId = $salida;
        }
        return $salida;
    }

    /* =============================================================================================
      FUNCTION 	tipo_save : si es actualizacion o insercion
      ============================================================================================== */

    function tipo_save() {
        $temp = " select ROW_COUNT() as cantidad ";

        $nrorow = $this->consultarOne($temp);
        $this->tiposave = $nrorow;
        return $nrorow; //1 insert - 2 update
    }

    /* =============================================================================================
      FUNCTION 	findRegistro :  encuentra un registro y lo carga
      ============================================================================================== */

    function findRegistro($where) {
        $sql = "select * from " . $this->table . " where " . $where;

        $row = $this->consultarLimitOne($sql);
        $this->original = $row;
        $this->setRegistro($row);
        // borra los posibles registro de auditoria no interesan para comprobar	si se modificaron
        unset($this->original["FechaAta"]);
        unset($this->original["fechaAlta"]);
        unset($this->original["usuarioAlta"]);
        unset($this->original["UsuarioIngreso"]);
        unset($this->original["fechaModifica"]);
        unset($this->original["FechaModificacion"]);
        unset($this->original["usuarioModifica"]);
        unset($this->original["UsuarioModificacion"]);
    }

    /* =============================================================================================
      FUNCTION 	limpiarRegistro :
      ============================================================================================== */

    function limpiarRegistro() {
        foreach ($this->fields as $key => $field) {
            $this->$field = "";
        }
    }

    /* =============================================================================================
      FUNCTION 	setRegistro : carga datos de un array
      ============================================================================================== */

    function setRegistro($datos) {
        if (!empty($datos)) {
            foreach ($datos as $field_name => $field_value) {
                if (in_array($field_name, $this->fields)) {
                    $this->$field_name = ($field_value == null) ? "" : strtoupper($field_value);
                }
            }
        }
    }

    /* =============================================================================================
      FUNCTION 	getDato : obtiene un dato
      ============================================================================================== */

    function getDato($fields) {
        if (in_array($fields, $this->fields))
            return $this->$fields;
        return "";
    }

    /* =============================================================================================
      FUNCTION 	sumarTotal: suma
      ============================================================================================== */

    function sumarTotal($clave, $valor) {
        if (in_array($clave, $this->fields)) {
            $this->$clave += $valor;
            return $this->$clave;
        }
        return false;
    }

    /* =============================================================================================
      FUNCTION 	restaTotal: resta
      ============================================================================================== */

    function restaTotal($clave, $valor) {
        if (in_array($clave, $this->fields)) {
            $this->$clave -= $valor;
            return $this->$clave;
        }
        return false;
    }

    /* =============================================================================================
      FUNCTION 	ejecutar : ejecuta un query
      ============================================================================================== */

    function ejecutar($sql, $msgerror = "") {
        $row = $this->db->query($sql);
        $msg = "<br> " . $msgerror . "<br> " . $sql;
        $this->errorDB($row, $msg);
        return $row;
    }

    /* =============================================================================================
      FUNCTION 	consultar : ejecuta un getArray
      ============================================================================================== */

    function consultar($sql, $msgerror = "") {
        $row = $this->db->getAll($sql);
        $msg = "<br> " . $msgerror . "<br> " . $sql;
        $this->errorDB($row, $msg);
        return $row;
    }

    /* =============================================================================================
      FUNCTION 	consultarLimitOne : devuevle 1 solo registro
      ============================================================================================== */

    function consultarLimitOne($sql, $msgerror = "") {
        $row = $this->db->getAll($sql); //,DB_FETCHMODE_ASSOC);

        $msg = "<br> " . $msgerror . "<br> " . $sql;
        $this->errorDB($row, $msg);
        if (!empty($row))
            $row = $row[0];
        return $row;
    }

    /* =============================================================================================
      FUNCTION 	cosultarOne : devuevle 1 solo registro
      ============================================================================================== */

    function cosultarOne($sql, $msgerror = "") {
        $row = $this->db->getOne($sql); // ,DB_FETCHMODE_ASSOC);
        $msg = "<br> " . $msgerror . "<br> " . $sql;
        $this->errorDB($row, $msg);
        if (empty($row)) {
            return "";
        }
        return $row;
    }

    /* =============================================================================================
      FUNCTION 	consultarOne : devuevle 1 solo registro
      ============================================================================================== */

    function consultarOne($sql, $msgerror = "") {
        $row = $this->db->getOne($sql); // ,DB_FETCHMODE_ASSOC);
        $msg = "<br> " . $msgerror . "<br> " . $sql;
        $this->errorDB($row, $msg);
        if (empty($row)) {
            return "";
        }
        return $row;
    }

    /* =============================================================================================
      FUNCTION 	errorDB : si hay un error de consulta
      ============================================================================================== */

    function errorDB(&$row, $sql = "") {
        //	LOS ERRORES A PARTIR DEL USO DE LA PDO DE PHP
        //       SON MANEJADOS MEDIANTE EXCEPCIONES

        /* if ($this->db->isError($row))
          {
          $error = "<br><br>--- class  " . $this->className . "--<br> " . $sql . "--<br>
          No se pudo realizar la consulta<br>";
          $error .= $row->getMessage() . '<br><br>';
          $error .= $row->getDebugInfo() . '<br>';
          $error .= $row->getType() . '<br>';
          echo $error;
          trigger_error($error,  E_USER_ERROR);
          $row = array();
          } */
    }

    /* =============================================================================================================================================
      FUNCTION 	formatoFechaBD:
      ============================================================================================================================================== */

    function formatoFechaBD($fecha) {
        $salida = "";
        if ($fecha != "") {
            $fecha = str_replace("/", "-", $fecha);
            $fechaarray = date_parse($fecha);
            $salida = date("Y-m-d", mktime(0, 0, 0, $fechaarray["month"], $fechaarray["day"], $fechaarray["year"]));
        }
        return $salida;
    }

    /* =============================================================================================================================================
      FUNCTION 	formatoFechaBD:
      ============================================================================================================================================== */

    function formatoFechaHoraBD($fecha) {
        $salida = "";
        if ($fecha != "") {
            $fecha = str_replace("/", "-", $fecha);
            $fechaarray = date_parse($fecha);
            $salida = date("Y-m-d H:i:s", mktime($fechaarray["hour"], $fechaarray["minute"], $fechaarray["second"], $fechaarray["month"], $fechaarray["day"], $fechaarray["year"]));
        }
        return $salida;
    }

    /* =============================================================================================================================================
      FUNCTION 	formatoFechaPHP:
      ============================================================================================================================================== */

    function formatoFechaPHP($fecha) {
        $salida = "";
        if ($fecha != "") {
            $fecha = str_replace("/", "-", $fecha);
            $fechaarray = date_parse($fecha);
            $salida = date("d-m-Y", mktime(0, 0, 0, $fechaarray["month"], $fechaarray["day"], $fechaarray["year"]));
        }
        return $salida;
    }

    /* =============================================================================================================================================
      FUNCTION 	validarValorCampoExisteEnTabla:
      ============================================================================================================================================== */

    function validarValorCampoExisteEnTabla($valor, $campo, $tabla) {
        // asumo que por que le codigo es valido
        $devolver = 1;
        if ($valor == "") {
            $devolver = 0;
        } else {
            $sql = "SELECT *
		   FROM  $tabla
		   WHERE $campo = $valor";
            $result = $conn->query($sql);
            if ($conn->isError($result)) {
                echo "Campo existe en $tabla<br>";
                die($result->getMessage());
            }
            if ($result->numRows() == 0) {
                $devolver = 0;
            }
        }
        return $devolver;
    }

// fin validar campo existe en tabla
}

// fin clases
?>