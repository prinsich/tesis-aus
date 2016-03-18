<?php

/* =============================================================================
  html_capacitadores: arma lista de todos los capacitadores activos
============================================================================= */

function smarty_function_html_capacitadores($params)
{
    global $db;
    $db->query("SET NAMES 'utf8'");

    $nombre = 'capacitadores';
    $onchange = '';
    $seleccionar = '';
    $estado = 'ALL';
    $option = '';

    $row = array();
    if (!empty($params)) {
        foreach ($params as $_key => $_val) {
            switch ($_key) {
                case 'name':
                    $nombre = $_val;
                    break;
                case 'onchange':
                    $onchange = ' onchange="'.$_val.'"';
                    break;
                case 'seleccionar':
                    $seleccionar = $_val;
                    break;
                case 'estado':
                    $estado = $_val;
                    break;
                default:
                    $option .= ' '.$_key."='".$_val."' ";
                    break;
            }
        }
    }
    //SALIDA
    $_output = "<select style='width: 300px;' name='$nombre' id='$nombre' $onchange $option>";
    $_output .= "<option value='00'> SELECCIONAR </option>";

    $sql = "SELECT id_capacitador, CONCAT(apellido, ', ', nombre) AS nombre
                FROM capacitadores
                WHERE id_capacitador != 0";
    if ($estado != 'ALL') {
        $sql .= " AND estado LIKE '$estado'";
    }

    $resultSetSql = $db->query($sql);
    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        if ($row['id_capacitador'] == $seleccionar) {
            $_output .= "<option value='".$row['id_capacitador']."' selected> ".$row['nombre'].'</option>';
        } else {
            $_output .= "<option value='".$row['id_capacitador']."'> ".$row['nombre'].'</option>';
        }
    }

    $_output .= '</select>';

    return $_output;
}
