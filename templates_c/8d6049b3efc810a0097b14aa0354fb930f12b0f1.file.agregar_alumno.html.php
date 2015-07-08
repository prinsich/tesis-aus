<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 19:18:37
         compiled from ".\templates\alumnos\agregar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:18775558f7455af6046-73430103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d6049b3efc810a0097b14aa0354fb930f12b0f1' => 
    array (
      0 => '.\\templates\\alumnos\\agregar_alumno.html',
      1 => 1435890535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18775558f7455af6046-73430103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558f7455c09146_36396656',
  'variables' => 
  array (
    'usrlogin' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f7455c09146_36396656')) {function content_558f7455c09146_36396656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_turnos')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_turnos.php';
if (!is_callable('smarty_function_html_checkbox_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_checkbox_talleres.php';
?><?php echo '<script'; ?>
>
    index = 1;
    function addRow(tableID) {
        if (index !== 0) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var campovacio = row.cells[1].childNodes[0];
                var campovacio2 = row.cells[2].childNodes[0];
            }
        }
        if (campovacio.value === '') {
            alert('Debe completar el nombre');
            window.setTimeout(function () {
                campovacio.value = '';
                campovacio.focus();
            }, 0);
        } else if (campovacio2.value === '') {
            alert('Debe completar el parentesco');
            window.setTimeout(function () {
                campovacio2.value = '';
                campovacio2.focus();
            }, 0);
        } else {

            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for (var i = 0; i < colCount; i++) {

                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[1].cells[i].innerHTML;
                switch (newcell.childNodes[0].id) {
                    case "table_checkbox":
                        newcell.childNodes[0].checked = false;
                        newcell.childNodes[0].name = 'checkbox';
                        break;
                    case "table_nombre":
                        newcell.childNodes[0].value = "";
                        newcell.childNodes[0].name = 'nombre_apellido_' + index;
                        break;
                    case "table_parentesco":
                        newcell.childNodes[0].value = "";
                        newcell.childNodes[0].name = 'parentesco_' + index;
                        break;
                    case "table_edad":
                        newcell.childNodes[0].value = "";
                        newcell.childNodes[0].name = 'edad_' + index;
                        break;
                    case "table_estado_civil":
                        newcell.childNodes[0].selectedIndex = 0;
                        newcell.childNodes[0].name = 'estado_civil_' + index;
                        break;
                    case "table_vive_hogar":
                        newcell.childNodes[0].selectedIndex = 0;
                        newcell.childNodes[0].name = 'vive_hogar_' + index;
                        break;
                    case "table_ocupacion":
                        newcell.childNodes[0].value = "";
                        newcell.childNodes[0].name = 'ocupacion_' + index;
                        break;
                }
            }
            index = index + 1;
            document.getElementById("cant_filas").value = index;
        }
    }

    function deleteRow(tableID) {
        chequea = 0;
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            var ultima = rowCount - 1;
            for (var i = ultima; i >= 0; i--) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (null !== chkbox && true === chkbox.checked) {
                    var chequea = chequea + 1;
                    if (rowCount === 2) {
                        alert("No se pueden borrar todas las lineas.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                }
            }
        } catch (e) {
            alert(e);
        }
        if (chequea === 0) {
            alert("Seleccione cual borrar.");
        }
    }

    function getCheckedRadioValue(radioGroupName) {
        var rads = document.getElementsByName(radioGroupName);
        var i;
        for (i = 0; i < rads.length; i++)
            if (rads[i].checked)
                return rads[i].value;
        return null; // or undefined, or your preferred default for none checked
    }

    function cleanCheckedRadioValue(radioGroupName) {
        var rads = document.getElementsByName(radioGroupName);
        var i;
        for (i = 0; i < rads.length; i++)
            rads[i].checked = false;
    }

    function validCheckedRadioValue(radioGroupName) {
        var rads = document.getElementsByName(radioGroupName);
        var i;
        var checked = false;
        for (i = 0; i < rads.length; i++) {
            if (rads[i].checked) {
                checked = true;
                break;
            }
        }
        return checked;
    }

    function validar() {
        
        var valido = true;
        var error = "Por favor complete los siguiente campos: \n";

        var apellido = document.getElementById("apellido").value;
        if (apellido.trim() === "") {
            valido = false;
            error += " - Apellido\n";
        }

        var nombre = document.getElementById("nombre").value;
        if (nombre.trim() === "") {
            valido = false;
            error += " - Nombre\n";
        }
        
        var sexo = document.getElementById("sexo").value;
        if (sexo === "00") {
            valido = false;
            error += " - Sexo\n";
        }

        var domicilio = document.getElementById("domicilio").value;
        if (domicilio.trim() === "") {
            valido = false;
            error += " - Domicilio\n";
        }

        var telefono = document.getElementById("telefono").value;
        if (telefono.trim() === "") {
            valido = false;
            error += " - Telefono\n";
        }

        var dni = document.getElementById("dni").value;
        if (dni.trim() === "") {
            valido = false;
            error += " - D.N.I.\n";
        }

        var fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
        if (fecha_nacimiento.trim() === "") {
            valido = false;
            error += " - Fecha de Nacimiento\n";
        }
        
        var fecha_nac = document.getElementById("fecha_nacimiento").value;
        var edad = calcularEdad(fecha_nac);
        if ( edad < 6 ) {
            valido = false;
            error += " - El alumno debe ser mayor a 6 a\u00F1os\n";
        }
    
        var alta_seguro = validCheckedRadioValue("alta_seguro_radio");
        if (alta_seguro === false) {
            valido = false;
            error += " - Alta del seguro\n";
        }
        
        var padre = document.getElementById("table_nombre").value;
        if (padre.trim() === "") {
            valido = false;
            error += " - Debe tener al menos un tutor legal\n";
        }

        var parentesco = document.getElementById("table_parentesco").value;
        if (parentesco.trim() === "") {
            valido = false;
            error += " - Debe tener al menos un parentesco con el tutor legal\n";
        }
        
        if(!valido){
            alert(error);
        }
        
        return valido;
    }
    
    
           
    function guardar() {
        if(validar()){
            document.getElementById("alta_seguro").value = getCheckedRadioValue("alta_seguro_radio");
            document.forms[0].submit();
        }
    }
    
    function ver_vac_faltantes(){
        var vac = document.getElementById("vacunacion").value;
        if(vac === "INCOMPLETAS"){
            document.getElementById("vac_faltantes").style.display = "inline";
        } else {
            document.getElementById("vac_faltantes").style.display = "none";
        }
    }

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/date/datetimepicker_css.js"><?php echo '</script'; ?>
>

<h1>Agregar Alumno</h1>

<form autocomplete="off" name="formAlumno" action="index.php?section=alumnos&sub=guardar_alumno" method="POST" >
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
    <input type="hidden" id="fecha_hoy" name="fecha_hoy" value="<?php echo $_smarty_tpl->tpl_vars['fecha_hoy']->value;?>
" />
    
    <h2>Datos Personales</h2>
    <p>Los campos marcado con <b>*</b> son obligatorios</p>

    <label for="apellido">Apellido(*):</label>
    <input type="text" value="" id="apellido" name="apellido" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="" id="nombre" name="nombre" onkeyup="this.value = this.value.toUpperCase();" />
    <br />
    
    <label for="sexo">Sexo(*):</label> 
    <select name="sexo" id="sexo" style="width: 300px;">
        <option value="00" selected="selected"> SELECCIONAR </option>
        <option value="M" >MASCULINO</option>
        <option value="F" >FEMENINO</option>
    </select>
    <br />

    <label for="domicilio">Domicilio(*):</label>
    <input type="text" value="" id="domicilio" name="domicilio" onkeyup="this.value = this.value.toUpperCase();" />
    <br />

    <label for="barrio">Barrio:</label>
    <input type="text" value="" id="barrio" name="barrio" onkeyup="this.value = this.value.toUpperCase();" />
    <br />

    <label for="telefono">Tel&eacute;fono(*):</label>
    <input type="text" value="" id="telefono" name="telefono" class="numeros"/>
    <br />

    <label for="dni">DNI(*):</label>
    <input type="text" value="" id="dni" name="dni" class="numeros" maxlength="8" />
    <br />

    <label for="fecha_nacimiento">Fecha de Nacimiento(*):</label>
    <input type="text" value="" id="fecha_nacimiento" name="fecha_nacimiento" onclick="javascript:NewCssCal(id)" readonly/>
    <br />

    <label for="escuela">Escuela:</label>
    <input type="text" value="" id="escuela" name="escuela" onkeyup="this.value = this.value.toUpperCase();" />
    <br />

    <label for="anio">A&ntilde;o:</label>
    <input type="text" value="" id="anio" name="anio" class="numeros" maxlength="2"/>
    <br />

    <label for="turno">Turno:</label> 
    <?php echo smarty_function_html_turnos(array('name'=>"turno"),$_smarty_tpl);?>

    <br />

    <label>Alta Seguro(*):</label> <br />
    <span class="diascheck">
        <input type="radio" id="alta_seguro_si" name="alta_seguro_radio" value="SI" />SI<br />
        <input type="radio" id="alta_seguro_no" name="alta_seguro_radio" value="NO" />NO<br />
        <input type="hidden" id="alta_seguro" name="alta_seguro" value="" />
    </span>
    <br />

    <h2>Talleres</h2>
    <label>Talleres a los que asiste:</label><br />
    <span class="diascheck">
        <?php echo smarty_function_html_checkbox_talleres(array('name'=>"talleres[]"),$_smarty_tpl);?>

    </span>


    <h2>Datos M&eacute;dicos</h2>

    <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_datos_medicos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h2>Grupo Familiar y/o de Convivencia</h2>

    <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_grupo_familiar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div align="center">
        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
        <input class="btnSubmit2" type="button" name="volver" value="Volver" onclick="history.back();">
    </div>

</form><?php }} ?>
