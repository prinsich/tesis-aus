<?php
/* =============================================================================
  html_talleres: arma un select de todas los talleres
  =========================================================================== */

function smarty_function_html_talleres($params, &$smarty) {
    global $db;
    $db->query("SET NAMES 'utf8'");

    $nombre = "";
    $onchange = "";
    $estado = "ALL";
    $seleccionar = "";

    $row = array();
    if (!empty($params)) {
        foreach ($params as $_key => $_val) {
            switch ($_key) {
                case "name":
                    $nombre = $_val;
                    break;
                case "onchange":
                    $onchange = ' onchange="' . $_val . '"';
                    break;
                case 'estado':
                    $estado = $_val;
                    break;
                case "seleccionar":
                    $seleccionar = $_val;
                    break;
            }
        }
    }
    //SALIDA
    $_output = "<select style='width: 150px;' name='$nombre' id='$nombre' $onchange>";
    $_output .= "<option value='0'> TODOS </option>";

    $sql = "SELECT id_taller, nombre
            FROM talleres";

    if($estado != "ALL"){
        $sql .= " WHERE estado LIKE '$estado'";
    }

    $resultSetSql = $db->query($sql);
    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {

        if ($row["id_taller"] == $seleccionar) {
            $_output .= "<option value='" . $row["id_taller"] . "' selected> " . $row["nombre"] . "</option>";
        } else {
            $_output .= "<option value='" . $row["id_taller"] . "'> " . $row["nombre"] . "</option>";
        }
    }


    $_output .= "</select>";

    return $_output;
}
