<?php

/* ===================================================================================================
  html_cargos: arma lista de todas los cargos
  =================================================================================================== */

function smarty_function_html_perfiles($params, &$smarty) {   // require_once $smarty->_get_plugin_filepath('shared','escape_special_chars');
    global $db;
    $db->query("SET NAMES 'utf8'");
    
    $nombre = "turnos";
    $onblur = "";
    $onchange = "";
    $seleccionar = "";
    $option = "";
    
    $row = array();
    if (!empty($params)) {
        foreach ($params as $_key => $_val) {
            switch ($_key) {
                case "name":
                    $nombre = $_val;
                    break;
                case "onblur":
                    $onblur = " onblur=" . $_val;
                    break;
                case "onchange":
                    $onchange = " onchange=" . $_val;
                    break;
                case "seleccionar":
                    $seleccionar = $_val;
                    break;
                default:
                    $option .= " " . $_key . "='" . $_val . "' ";
            }
        }
    }
    
    //SALIDA
    $_output = "<select style='width: 300px;' name='$nombre' id='$nombre' $onchange $onblur $option> ";
    $_output .= "<option value='0'> SELECCIONAR </option>";

    $sql = "SELECT id_perfil, perfil
            FROM ".BASE_DATA.".perfiles
            WHERE id_perfil != 0";
    $resultSetSql = $db->query($sql);

    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        if ($row["id_perfil"] == $seleccionar) {
            $_output .= "<option  selected='selected' value='" . $row["id_perfil"] . "'>" . $row["perfil"] . "</option>";
        } else {
            $_output .= "<option  value='" . $row["id_perfil"] . "'>" . $row["perfil"] . "</option>";
        }
    }

    $_output .= "</select>";

    return $_output;
}