<?php

/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {html_table} function plugin
 * Type:     function<br>
 * Name:     html_table<br>
 * Date:     Feb 17, 2003<br>
 * Purpose:  make an html table from an array of data<br>
 * Params:
 * <pre>
 * - loop       - array to loop through
 * - cols       - number of columns, comma separated list of column names
 *                or array of column names
 * - rows       - number of rows
 * - table_attr - table attributes
 * - th_attr    - table heading attributes (arrays are cycled)
 * - tr_attr    - table row attributes (arrays are cycled)
 * - td_attr    - table cell attributes (arrays are cycled)
 * - trailpad   - value to pad trailing cells with
 * - caption    - text for caption element
 * - vdir       - vertical direction (default: "down", means top-to-bottom)
 * - hdir       - horizontal direction (default: "right", means left-to-right)
 * - inner      - inner loop (default "cols": print $loop line by line,
 *                $loop will be printed column by column otherwise)
 * </pre>
 * Examples:
 * <pre>
 * {table loop=$data}
 * {table loop=$data cols=4 tr_attr='"bgcolor=red"'}
 * {table loop=$data cols="first,second,third" tr_attr=$colors}
 * </pre>
 *
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @author   credit to Messju Mohr <messju at lammfellpuschen dot de>
 * @author   credit to boots <boots dot smarty at yahoo dot com>
 * @version  1.1
 * @link     http://www.smarty.net/manual/en/language.function.html.table.php {html_table}
 *           (Smarty online manual)
 *
 * @param array $params parameters
 *
 * @return stringfunction.html_checkbox_talleres
 */
function smarty_function_html_checkbox_talleres($params) {
    global $db;
    $db->query("SET NAMES 'utf8'");

    $_output = '';
    $option = "";
    $nombre = "";
    $onchange = "";
    $seleccionar = "";

    $row = array();
    if (!empty($params)) {
        foreach ($params as $_key => $_val) {
            switch ($_key) {
                case 'name':
                    $nombre = $_val;
                    break;
                case "onchange":
                    $onchange = ' onchange="' . $_val . '"';
                    break;
                case 'selecionar':
                    $seleccionar = explode(",", $_val);
                    break;
            }
        }
    }
    
    //var_dump($seleccionar);
    //die;
    //SALIDA
    $_output = "<table id='$nombre' name='$nombre' class='diascheck' style='width: 310px; float: right; margin-left: 360px; margin-right: 100px; margin-top: 0px; margin-bottom: 20px;'>";

    $sql = "SELECT id_taller, nombre
                FROM talleres
                WHERE estado LIKE 'ACTIVO'";

    $resultSetSql = $db->query($sql);
    while ($row = $resultSetSql->fetchRow(DB_FETCHMODE_ASSOC)) {
        $_output .= "<tr>";
        if($seleccionar == null){
             $_output .= "<td><input type='checkbox' id='taller_" . $row["id_taller"] . "' name='talleres_list[]' value='" . $row["id_taller"] . "' /></td>";
        } else if(in_array($row["id_taller"], $seleccionar)){
            $_output .= "<td><input type='checkbox' id='taller_" . $row["id_taller"] . "' name='talleres_list[]' value='" . $row["id_taller"] . "' checked /></td>";
        } else {
            $_output .= "<td><input type='checkbox' id='taller_" . $row["id_taller"] . "' name='talleres_list[]' value='" . $row["id_taller"] . "' /></td>";
        }
        $_output .= "<td>" . $row["nombre"] . "</td>";
        $_output .= "</tr>";
    }

    $_output .= "</table>";

    return $_output;
}
