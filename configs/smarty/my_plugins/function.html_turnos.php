<?php

/* =============================================================================
  html_turnos: arma lista de todos los turnos
============================================================================= */

function smarty_function_html_turnos($params, &$smarty)
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
    $_output = "<select style='width: 300px;' name='$nombre' id='$nombre' $onchange $onblur $option> ";
    $_output .= "<option value='0'> SELECCIONAR </option>";

    $sql = 'SELECT id_turno, turno
            FROM '.BASE_DATA.'.turnos
            WHERE id_turno != 0';
    $resultSetSql = $db->query($sql);

    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        if ($row['id_turno'] == $seleccionar) {
            $_output .= "<option  selected='selected' value='".$row['id_turno']."'> ".$row['turno'].'</option>';
        } else {
            $_output .= "<option  value='".$row['id_turno']."'> ".$row['turno'].'</option>';
        }
    }

    $_output .= '</select>';

    return $_output;
}
