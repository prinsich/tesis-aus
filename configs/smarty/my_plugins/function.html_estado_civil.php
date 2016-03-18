<?php

/* =============================================================================
  html_estado_civil: arma lista de todos los estados civiles
============================================================================= */

function smarty_function_html_estado_civil($params, &$smarty)
{
    global $db;
    $db->query("SET NAMES 'utf8'");

    $nombre = $id = 'estado_civil';
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
                case 'id':
                    $id = $_val;
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
    $_output = "<select name='$nombre' id='$id' $onchange $onblur $option>";
    $_output .= "<option value='0'> SELECCIONAR </option>";

    $sql = 'SELECT id_est_civil, estado_civil
            FROM '.BASE_DATA.'.estado_civil
            WHERE id_est_civil != 0 ';
    $resultSetSql = $db->query($sql);

    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        if ($row['id_est_civil'] == $seleccionar) {
            $_output .= "<option  selected value='".$row['id_est_civil']."'> ".$row['estado_civil'].' </option>';
        } else {
            $_output .= "<option  value='".$row['id_est_civil']."'> ".$row['estado_civil'].' </option>';
        }
    }

    $_output .= '</select>';

    return $_output;
}
