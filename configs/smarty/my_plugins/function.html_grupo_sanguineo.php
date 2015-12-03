<?php

/* =============================================================================
  html_cargos: arma lista de todas los grupos sanguineos
  =========================================================================== */

function smarty_function_html_grupo_sanguineo($params, &$smarty) {
    global $db;
    $db->query("SET NAMES 'utf8'");
        
    $nombre = "grupo_sanguineo";
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

    $sql = "SELECT id_grupo_sanguineo, CONCAT(grupo_sanguineo, ' ', factor) AS gsanguineo
            FROM ".BASE_DATA.".grupo_sanguineos
            WHERE id_grupo_sanguineo != 0";
    $resultSetSql = $db->query($sql);
    
    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        if ($row["id_grupo_sanguineo"] == $seleccionar) {
            $_output .= "<option  selected='selected' value='" . $row["id_grupo_sanguineo"] . "'> " . $row["gsanguineo"] . "</option>";
        } else {
            $_output .= "<option  value='" . $row["id_grupo_sanguineo"] . "'> " . $row["gsanguineo"] . "</option>";
        }
    }

    $_output .= "</select>";

    return $_output;
}

?>