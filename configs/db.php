<?php

    /*=============================================================================================
        CARGA CONEXION BD
    ==============================================================================================*/
    include 'ConexionBD.php';
    $config = new ConexionBD();
    $db = $config->conectar();
    //$db->setFetchMode(DB_FETCHMODE_ASSOC);

    /*=============================================================================================
        FUNCTION  formatoFechaBD: formatea fecha para la Base de datos
    ==============================================================================================*/
    function formatoFechaBD($fecha)
    {
        $salida = '';
        if ($fecha != '') {
            $fecha = str_replace('/', '-', $fecha);
            $fechaarray = date_parse($fecha);
            $salida = date('Y-m-d', mktime(0, 0, 0, $fechaarray['month'], $fechaarray['day'], $fechaarray['year']));
        }

        return $salida;
    }

    /*=============================================================================================
        FUNCTION  formatoFechaDMY: formatea fecha para la Base de datos
    ==============================================================================================*/
    function formatoFechaDMY($fecha)
    {
        $salida = '';
        if ($fecha != '') {
            $fecha = str_replace('/', '-', $fecha);
            $fechaarray = date_parse($fecha);
            $salida = date('d-m-Y', mktime(0, 0, 0, $fechaarray['month'], $fechaarray['day'], $fechaarray['year']));
        }

        return $salida;
    }

    /*=============================================================================================
        FUNCTION  isErrorDB: error de ejecucion en la Base de datos
    ==============================================================================================*/
    function isErrorDB($db, &$row)
    {
        if ($db->isError($row)) {
            $error = '<br><br> No se pudo realizar la consulta <br>';
            $error .= $row->getMessage().'<br><br>';
            $error .= $row->getDebugInfo().'<br>';
            $error .= $row->getType().'<br>';
            echo $error;
            $row = array();

            return false;
        }

        return true;
    }

    function charUTF8($db)
    {
        $db->query("SET NAMES 'utf8'");
    }
