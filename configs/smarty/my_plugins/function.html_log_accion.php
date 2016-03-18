<?php

/* =============================================================================
  html_turnos: arma lista de todos los turnos
============================================================================= */

function smarty_function_html_log_accion($params, &$smarty)
{
    global $db;
    $db->query("SET NAMES 'utf8'");

    $nombre = 'turnos';
    $onblur = '';
    $onchange = '';
    $seleccionar = '';
    $option = '';

    $row = array();
    if (!empty($params)) {
        foreach ($params as $_key => $_val) {
            switch ($_key) {
                case 'name':
                    $nombre = $_val;
                    break;
                case 'onblur':
                    $onblur = ' onblur='.$_val;
                    break;
                case 'onchange':
                    $onchange = ' onchange='.$_val;
                    break;
                case 'seleccionar':
                    $seleccionar = $_val;
                    break;
                default:
                    $option .= ' '.$_key."='".$_val."' ";
            }
        }
    }

    //SALIDA
    $_output = "<select name='$nombre' id='$nombre' $onchange $onblur $option> ";
    $_output .= "<option value=''> TODOS </option>";

    $sql = 'SELECT action
            FROM log
            GROUP BY action';
    $resultSetSql = $db->query($sql);

    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        if ($row['action'] == $seleccionar) {
            $_output .= "<option  selected='selected' value='".$row['action']."'> ".$row['action'].'</option>';
        } else {
            $_output .= "<option  value='".$row['action']."'> ".$row['action'].'</option>';
        }
    }

    $_output .= '</select>';

    return $_output;
}
