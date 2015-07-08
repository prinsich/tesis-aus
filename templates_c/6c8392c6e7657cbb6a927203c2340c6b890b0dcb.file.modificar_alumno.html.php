<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-01 23:23:32
         compiled from ".\templates\alumnos\modificar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:10583559360d3d7d501-39971324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c8392c6e7657cbb6a927203c2340c6b890b0dcb' => 
    array (
      0 => '.\\templates\\alumnos\\modificar_alumno.html',
      1 => 1435803794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10583559360d3d7d501-39971324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559360d409a2d0_78552471',
  'variables' => 
  array (
    'Sajax' => 0,
    'datos_alumno' => 0,
    'datos_medicos' => 0,
    'datos_personales' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559360d409a2d0_78552471')) {function content_559360d409a2d0_78552471($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_turnos')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_turnos.php';
if (!is_callable('smarty_function_html_checkbox_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_checkbox_talleres.php';
?><?php echo '<script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>


    function addRow(tableID) {
        index = parseInt(document.getElementById("cant_filas").value);
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
                        newcell.childNodes[0].value = "";
                        newcell.childNodes[0].checked = false;
                        newcell.childNodes[0].name = 'id_' + index;
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
            if (confirm("¿Esta seguro q desea eliminar estos familiares?")) {
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
                        if(chkbox.value !== "" )
                            x_eliminar_familiar(chkbox.value, cargar_cb);
                    }
                }
            }
        } catch (e) {
            alert(e);
        }
        if (chequea === 0) {
            alert("Seleccione cual borrar.");
        }
    }

    function cargar_cb(z) {
        alert(z);
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
        if (validar()) {
            document.getElementById("alta_seguro").value = getCheckedRadioValue("alta_seguro_radio");
            document.forms[0].submit();
        }
    }
    
    function ver_vac_faltantes(){
        var vac = document.getElementById("vacunacion").value;
        if(vac === "INCOMPLETA"){
            document.getElementById("vac_faltantes").style.display = "inline";
        } else {
            document.getElementById("vac_faltantes").style.display = "none";
            document.getElementById("vacunas_faltantes").innerHTML = "";
        }
    }

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/date/datetimepicker_css.js"><?php echo '</script'; ?>
>
<h1>Agregar Alumno</h1>
<h2>Datos Personales</h2>
<p>Los campos marcado con <b>*</b> son obligatorios</p>

<form autocomplete="off" name="formAlumno" action="index.php?section=alumnos&sub=guardar_alumno" method="POST">
    <input type="hidden" id="accion" name="accion" value="modificar" />
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['id_alumno'];?>
" id="id_alumno" name="id_alumno" />
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['id_dato_medico'];?>
" id="id_dato_medico" name="id_dato_medico" />
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['id_personal'];?>
" id="id_personal" name="id_personal" />
    <input type="hidden" id="fecha_hoy" name="fecha_hoy" value="<?php echo $_smarty_tpl->tpl_vars['fecha_hoy']->value;?>
" />
    
    <label for="apellido">Apellido(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['apellido'];?>
" id="apellido" name="apellido" class="letras"/>
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['nombre'];?>
" id="nombre" name="nombre" class="letras"/>
    <br />

    <label for="sexo">Sexo(*):</label>
    <select name="sexo" id="sexo" style="width: 300px;"> 
        <?php if ($_smarty_tpl->tpl_vars['datos_alumno']->value['sexo']=="M") {?>
        <option value="00" > SELECCIONAR </option>
        <option value="M" selected="selected" >MASCULINO</option>
        <option value="F" >FEMENINO</option>
        <?php } elseif ($_smarty_tpl->tpl_vars['datos_alumno']->value['sexo']=="F") {?>
        <option value="00" > SELECCIONAR </option>
        <option value="M" selected="selected">MASCULINO</option>
        <option value="F" >FEMENINO</option>
        <?php } else { ?>
        <option value="00" selected="selected"> SELECCIONAR </option>
        <option value="M" >MASCULINO</option>
        <option value="F" >FEMENINO</option>
        <?php }?>
    </select>
    <br />

    <label for="domicilio">Domicilio(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['domicilio'];?>
" id="domicilio" name="domicilio" />
    <br />

    <label for="barrio">Barrio:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['barrio'];?>
" id="barrio" name="barrio" />
    <br />

    <label for="telefono">Tel&eacute;fono(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['telefono'];?>
" id="telefono" name="telefono" class="numeros"/>
    <br />

    <label for="dni">DNI(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['dni'];?>
" id="dni" name="dni" class="numeros" maxlength="8"/>
    <br />

    <label for="fecha_nacimiento">Fecha de Nacimiento(*):</label>
    <input type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datos_alumno']->value['fecha_nacimiento'],'d-m-Y');?>
" id="fecha_nacimiento" name="fecha_nacimiento" onclick="javascript:NewCssCal(id)" readonly/>
    <br />

    <label for="escuela">Escuela:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['escuela'];?>
" id="escuela" name="escuela" />
    <br />

    <label for="anio">A&ntilde;o:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['anio'];?>
" id="anio" name="anio" class="numeros" maxlength="2"/>
    <br />

    <label for="turno">Turno:</label> 
    <input type="hidden" id="turno_aux" name="turno_aux" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['turno'];?>
" />
    <?php echo smarty_function_html_turnos(array('name'=>"turno",'seleccionar'=>$_smarty_tpl->tpl_vars['datos_alumno']->value['id_turno']),$_smarty_tpl);?>

    <br />

    <label>Alta Seguro(*):</label> <br />
    <span class="diascheck">
        <?php if (!isset($_smarty_tpl->tpl_vars['datos_alumno']) || !is_array($_smarty_tpl->tpl_vars['datos_alumno']->value)) $_smarty_tpl->createLocalArrayVariable('datos_alumno');
if ($_smarty_tpl->tpl_vars['datos_alumno']->value['alta_seguro'] = "SI") {?>
        <input type="radio" id="alta_seguro_si" name="alta_seguro_radio" value="SI" checked=""/>Si<br />
        <input type="radio" id="alta_seguro_no" name="alta_seguro_radio" value="NO" />No<br />
        <input type="hidden" id="alta_seguro" name="alta_seguro" value="" />
        <?php } else { if (!isset($_smarty_tpl->tpl_vars['datos_alumno']) || !is_array($_smarty_tpl->tpl_vars['datos_alumno']->value)) $_smarty_tpl->createLocalArrayVariable('datos_alumno');
if ($_smarty_tpl->tpl_vars['datos_alumno']->value['alta_seguro'] = "NO") {?>
        <input type="radio" id="alta_seguro_si" name="alta_seguro_radio" value="SI" />Si<br />
        <input type="radio" id="alta_seguro_no" name="alta_seguro_radio" value="NO" checked=""/>No<br />
        <input type="hidden" id="alta_seguro" name="alta_seguro" value="" />
        <?php } else { ?>
        <input type="radio" id="alta_seguro_si" name="alta_seguro_radio" value="SI" />Si<br />
        <input type="radio" id="alta_seguro_no" name="alta_seguro_radio" value="NO" />No<br />
        <input type="hidden" id="alta_seguro" name="alta_seguro" value="" />
        <?php }}?>
    </span>
    <br />

    <h2>Talleres</h2>
    <label>Talleres a los que asiste:</label><br />
    <span class="diascheck">
        <?php echo smarty_function_html_checkbox_talleres(array('name'=>"talleres[]",'selecionar'=>((string)$_smarty_tpl->tpl_vars['talleres_alumno']->value)),$_smarty_tpl);?>

    </span>


    <h2>Datos M&eacute;dicos</h2>

    <?php echo $_smarty_tpl->getSubTemplate ("alumnos/modificar_datos_medicos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h2>Grupo Familiar y/o de Convivencia</h2>

    <?php echo $_smarty_tpl->getSubTemplate ("alumnos/modificar_grupo_familiar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div align="center">
        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
        <input class="btnSubmit2" type="button" name="volver" value="Volver" onclick="history.back();">
    </div>

</form>
<?php }} ?>
