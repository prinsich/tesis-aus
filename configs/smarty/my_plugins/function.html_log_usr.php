<?php

/* =============================================================================
  html_turnos: arma lista de todos los turnos
============================================================================= */

function smarty_function_html_log_usr($params, &$smarty)
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

    $sql = "SELECT user
            FROM log
            WHERE user NOT LIKE ''
            GROUP BY user";
    $resultSetSql = $db->query($sql);

    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        if ($row['user'] == $seleccionar) {
            $_output .= "<option  selected='selected' value='".$row['user']."'> ".$row['user'].'</option>';
        } else {
            $_output .= "<option  value='".$row['user']."'> ".$row['user'].'</option>';
        }
    }

    $_output .= '</select>';

    return $_output;
}
