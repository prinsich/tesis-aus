<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 19:31:49
         compiled from ".\templates\alumnos\modificar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:2730554f4ab69705a56-73503636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c933ec83035236d4edd621333c7ce70eef66a17' => 
    array (
      0 => '.\\templates\\alumnos\\modificar_alumno.html',
      1 => 1426447566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2730554f4ab69705a56-73503636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f4ab6988e2e7_88248205',
  'variables' => 
  array (
    'Sajax' => 0,
    'datos_alumno' => 0,
    'datos_medicos' => 0,
    'datos_familiares' => 0,
    'index' => 0,
    'datos_personales' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f4ab6988e2e7_88248205')) {function content_54f4ab6988e2e7_88248205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkbox_talleres')) include 'D:\\Program Files\\WampServer\\www\\ABM_AUS\\libs\\plugins\\function.html_checkbox_talleres.php';
?><?php echo '<script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>


    function auto_select() {
        var sex = document.getElementById("sexo_aux").value;
        switch (sex) {
            case "MASCULINO":
                document.getElementById("sexo").selectedIndex = "0";
                break;
            case "FEMENINO":
                document.getElementById("sexo").selectedIndex = "1";
                break;
        }

        var turno = document.getElementById("turno_aux").value;
        switch (turno) {
            case "Ma&n&ntilde;ana":
                document.getElementById("turno").selectedIndex = "0";
                break;
            case "TARDE":
                document.getElementById("turno").selectedIndex = "1";
                break;
            case "NOCHE":
                document.getElementById("turno").selectedIndex = "2";
                break;
        }

        var alta_seguro = document.getElementById("alta_seguro_aux").value;
        switch (alta_seguro) {
            case "SI":
                document.getElementById("alta_seguro_si").checked = true;
                document.getElementById("alta_seguro_no").checked = false;
                break;
            case "NO":
                document.getElementById("alta_seguro_si").checked = false;
                document.getElementById("alta_seguro_no").checked = true;
                break;
        }

        var grupo_sanguineo = document.getElementById("grupo_sanguineo_aux").value;
        switch (grupo_sanguineo) {
            case "0+":
                document.getElementById("grupo_sanguineo").selectedIndex = "0";
                break;
            case "0-":
                document.getElementById("grupo_sanguineo").selectedIndex = "1";
                break;
            case "A+":
                document.getElementById("grupo_sanguineo").selectedIndex = "2";
                break;
            case "A-":
                document.getElementById("grupo_sanguineo").selectedIndex = "3";
                break;
            case "B+":
                document.getElementById("grupo_sanguineo").selectedIndex = "4";
                break;
            case "B-":
                document.getElementById("grupo_sanguineo").selectedIndex = "5";
                break;
            case "AB+":
                document.getElementById("grupo_sanguineo").selectedIndex = "6";
                break;
            case "AB-":
                document.getElementById("grupo_sanguineo").selectedIndex = "7";
                break;
        }

        var vacunacion = document.getElementById("vacunacion_aux").value;
        switch (vacunacion) {
            case "INCOMPLETA":
                document.getElementById("vacunacion").selectedIndex = "0";
                break;
            case "COMPLETAS":
                document.getElementById("vacunacion").selectedIndex = "1";
                document.getElementById("vac_faltantes").style.display = "none";
                break;
        }
    }


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
        
        var fecha_tmp = fecha_nacimiento.split("-");
        var fecha_nac = new Date(fecha_tmp[2],fecha_tmp[1]-1,fecha_tmp[0]);
        var today = new Date();
        if (fecha_nac > today){
            valido = false;
            error += "La fecha de nacimiento debe ser menos a la actual";
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
        //alert(document.getElementsByName("id_familiar_0").value);
        
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
<body onload="auto_select()">
    <h1>Agregar Alumno</h1>
    <h2>Datos Personales</h2>
    <p>Los campos marcado con <b>*</b> son obligatorios</p>

    <form name="formAlumno" action="index.php?section=alumnos&sub=guardar_alumno" method="POST">
        <input type="hidden" id="accion" name="accion" value="modificar" />
        <label for="apellido">Apellido(*):</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['apellido'];?>
" id="apellido" name="apellido" class="letras"/>
        <br />

        <label for="nombre">Nombres(*):</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['nombre'];?>
" id="nombre" name="nombre" class="letras"/>
        <br />

        <label for="sexo">Sexo(*):</label>
        <input type="hidden" id="sexo_aux" name="sexo_aux" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['sexo'];?>
" />
        <select name="sexo" id="sexo" style="width: 300px;"> 
            <option value="MASCULINO">MASCULINO</option>
            <option value="FEMENINO">FEMENINO</option>
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
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['fecha_nacimiento'];?>
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
        <select id="turno" name="turno" style="width: 300px;"> 
            <option value="Ma&n&ntilde;ana" selected="selected">MAÑANA</option>
            <option value="TARDE">TARDE</option>
            <option value="NOCHE">NOCHE</option>
        </select>
        <br />

        <label>Alta Seguro(*):</label> <br />
        <input type="hidden" id="alta_seguro_aux" name="alta_seguro_aux" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['alta_seguro'];?>
" />
        <span class="diascheck">
            <input type="radio" id="alta_seguro_si" name="alta_seguro_radio" value="SI" />Si<br />
            <input type="radio" id="alta_seguro_no" name="alta_seguro_radio" value="NO" />No<br />
            <input type="hidden" id="alta_seguro" name="alta_seguro" value="" />
        </span>
        <br />

        <h2>Talleres</h2>
        <label>Talleres a los que asiste:</label><br />
        <span class="diascheck">
            <?php echo smarty_function_html_checkbox_talleres(array('name'=>"talleres[]",'selecionar'=>((string)$_smarty_tpl->tpl_vars['talleres_alumno']->value)),$_smarty_tpl);?>

        </span>


        <h2>Datos M&eacute;dicos</h2>

        <label for="grupo_sanguineo">Grupo Sangu&iacute;neo:</label>
        <input type="hidden" id="grupo_sanguineo_aux" name="grupo_sanguineo_aux" value="<?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['grupo_sanguineo'];?>
" />
        <select id="grupo_sanguineo" name="grupo_sanguineo"> 
            <option value="0+">O +</option>
            <option value="0-">O -</option>
            <option value="A+">A +</option>
            <option value="A-">A -</option>
            <option value="B+">B +</option>
            <option value="B-">B -</option>
            <option value="AB+">AB +</option>
            <option value="AB-">AB -</option>
        </select>
        <br />

        <label for="vacunacion">Vacunaci&oacute;n:</label> 
        <input type="hidden" id="vacunacion_aux" name="vacunacion_aux" value="<?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['vacunacion'];?>
" />
        <select id="vacunacion" name="vacunacion" onchange="ver_vac_faltantes()" style="width: 125px"> 
            <option value="INCOMPLETAS">INCOMPLETAS</option>
            <option value="COMPLETAS">COMPLETAS</option>
        </select>
        <br />

        <div id="vac_faltantes">
        <label for="vacunas_faltantes">Vacunas Faltantes:</label>
        <textarea id="vacunas_faltantes" name="vacunas_faltantes"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['vacunas_faltantes'];?>
</textarea>
        <br />
        </div>
        
        <label for="enfermedades_padecidas">Enfermedades Padecidas (especificar edad aproximada):</label>
        <textarea id="enfermedades_padecidas" name="enfermedades_padecidas"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['enfermedades_padecidas'];?>
</textarea>
        <br />

        <label for="alergias">Alergias:</label>
        <textarea id="alergias" name="alergias"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['alergias'];?>
</textarea>
        <br />

        <label for="secuelas">Secuelas:</label>
        <textarea id="secuelas" name="secuelas"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['secuelas'];?>
</textarea>
        <br />

        <label for="cuidados_especiales">Cuidados Especiales:</label>
        <textarea id="cuidados_especiales" name="cuidados_especiales"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['cuidados_especiales'];?>
</textarea>
        <br />

        <label for="enfermedades_cogenitas">Enfermedades Cong&eacute;nitas:</label>
        <textarea id="enfermedades_cogenitas" name="enfermedades_cogenitas"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['enfermedades_cogenitas'];?>
</textarea>
        <br />

        <label for="cirugias">Cirug&iacute;as (especificar edad aproximada):</label>
        <textarea id="cirugias" name="cirugias"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['cirugias'];?>
</textarea>
        <br />

        <label for="tratamientos_prolongados">Tratamientos M&eacute;dicos Prolongados:</label>
        <textarea id="tratamientos_prolongados" name="tratamientos_prolongados"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['tratamientos_prolongados'];?>
</textarea>
        <br />

        <label for="tratamientos_actuales">Tratamientos M&eacute;dicos Actuales:</label>
        <textarea id="tratamientos_actuales" name="tratamientos_actuales"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['tratamientos_actuales'];?>
</textarea>
        <br />

        <label for="medicacion_actual">Medicamentos que toma actualmente:</label>
        <textarea id="medicacion_actual" name="medicacion_actual"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['medicacion_actual'];?>
</textarea>
        <br />

        <label for="urgencias">En caso de URGENCIA, M&eacute;dicos autorizados para su tratamiento y Hospitales o Centros M&eacute;dicos para su traslado:</label>
        <textarea id="urgencias" name="urgencias"><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['urgencias'];?>
</textarea>
        <br />

        <label for="obra_social">Obra Social:</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['obra_social'];?>
" id="obra_social" name="obra_social" />
        <br />

        <h3>El taller se encuentra protegido por Seguro San Crist&iacute;bal.</h3>

        <h2>Grupo Familiar y/o de Convivencia</h2>

        <table id="familiares">
            <tr>
                <th>#</th>
                <th>Nombre y Apellido</th>
                <th>Parentesco</th>
                <th>Edad</th>
                <th>Estado Civil</th>
                <th>Vive en el Hogar</th>
                <th>Ocupaci&oacute;n</th>
            </tr>
            <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(0, null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['name'] = 'dm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datos_familiares']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total']);
?>
            <tr>
                <input type="hidden" id="table_checkbox" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['id_familiar'];?>
" name="id_familiar_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"/>
                <td><input type="checkbox" id="table_checkbox" name="id_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['id_familiar'];?>
" class="inputntable"/></td>
                <td><input type="text" id="table_nombre" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['nombre_apellido'];?>
" name="nombre_apellido_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="inputntable letras" /></td>
                <td><input type="text" id="table_parentesco" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['parentesco'];?>
" name="parentesco_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" /></td>
                <td><input type="text" id="table_edad" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['edad'];?>
" name="edad_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="inputedad numeros" maxlength="2"/></td>
                <td><select id="table_estado_civil" name="estado_civil_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"> 
                        <?php if ($_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['estado_civil']=="SOLTERO/A") {?>
                        <option value="SOLTERO/A" selected>SOLTERO/A</option>
                        <option value="CASADO/A">CASADO/A</option>
                        <option value="DIVORCIADO/A">DIVORCIADO/A</option>
                        <option value="CONVIVE EN PAREJA">CONVIVE EN PAREJA</option>

                        <?php } elseif ($_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['estado_civil']=="CASADO/A") {?>
                        <option value="SOLTERO/A">SOLTERO/A</option>
                        <option value="CASADO/A" selected>CASADO/A</option>
                        <option value="DIVORCIADO/A">DIVORCIADO/A</option>
                        <option value="CONVIVE EN PAREJA">CONVIVE EN PAREJA</option>

                        <?php } elseif ($_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['estado_civil']=="DIVORCIADO/A") {?>
                        <option value="SOLTERO/A">SOLTERO/A</option>
                        <option value="CASADO/A">CASADO/A</option>
                        <option value="DIVORCIADO/A" selected>DIVORCIADO/A</option>
                        <option value="CONVIVE EN PAREJA">CONVIVE EN PAREJA</option>

                        <?php } elseif ($_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['estado_civil']=="CONVIVE EN PAREJA") {?>
                        <option value="SOLTERO/A">SOLTERO/A</option>
                        <option value="CASADO/A">CASADO/A</option>
                        <option value="DIVORCIADO/A">DIVORCIADO/A</option>
                        <option value="CONVIVE EN PAREJA" selected>CONVIVE EN PAREJA</option>

                        <?php }?>
                    </select></td>
                <td><select id="table_vive_hogar" name="vive_hogar_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"> 
                        <?php if ($_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['vive_hogar']=="SI") {?>
                        <option value="SI" selected>Si</option>
                        <option value="NO">No</option>
                        <?php } else { ?>
                        <option value="SI">Si</option>
                        <option value="NO" selected>No</option>
                        <?php }?>
                    </select></td>
                <td><input type="text" id="table_ocupacion" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['ocupacion'];?>
" name="ocupacion_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" /></td>
            </tr>
            <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
            <?php endfor; endif; ?>
        </table>
        <input type="button" class="btnSubmit" value="Agregar Fila" onclick="addRow('familiares')">
        <input type="button" class="btnSubmit" value="Eliminar Fila" onclick="deleteRow('familiares')"> <br />
        <input type="hidden" id="cant_filas" name="cant_filas" value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><br />

        <label for="observaciones_familiares">Observaciones:</label>
        <textarea id="observaciones_familiares" name="observaciones_familiares"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['observaciones_familiares'];?>
</textarea>
        <br />

        <label for="relaciones_familiares">
            <ul>
                <li>Relaciones familiares. </li>
                <li>Din&aacute;mica Familiar. </li>
                <li>Momento de encuentro familiar. </li>
                <li>Problemas m&aacute;s comunes en su familia. </li>
                <li>Situaci&oacute;n econ&oacute;mica-laboral de su familia. </li>
                <li>Integraci&oacute;n de su familia a la comunidad.</li>
            </ul>
        </label> 
        <textarea id="relaciones_familiares" name="relaciones_familiares"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['relaciones_familiares'];?>
</textarea>
        <br />


        <h2>Grupo de Amigos</h2>

        <label for="grupo_amigo">
            <ul>
                <li>Si tiene amigos, c&oacute;mo son y qu&eacute; hacen. </li>
                <li>Cu&aacute;nto tiempo pasa con ellos. </li>
                <li>Qu&eacute; hacen juntos. </li>
                <li>Qu&eacute; le gusta hacer con ellos. </li>
                <li>Qu&eacute; le gusta y qu&eacute; no de sus amigos. </li>
            </ul>
        </label>
        <textarea id="grupo_amigo" name="grupo_amigo"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['grupo_amigo'];?>
</textarea>
        <br />

        <h2>Tiempo Libre</h2>

        <label for="tiempo_libre">
            <ul>
                <li>Qu&eacute; actividades recreativas realiza. </li>
                <li>Qu&eacute; otras actividades recreativas le gustar&iacute;a realizar. </li>
            </ul>
        </label>
        <textarea id="tiempo_libre" name="tiempo_libre"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['tiempo_libre'];?>
</textarea>
        <br />	


        <h2>Educaci&oacute;n</h2>

        <label for="educacion">
            <ul>
                <li>Si participa del sistema educativo. </li>
                <li>Inconvenientes con la educaci&oacute;n o con el sistema. </li>
                <li>Importancia que le da. </li>
                <li>Problemas con la instituci&oacute;n educativa, profesores, etc. </li>
                <li>Qu&eacute; le gusta y qu&eacute; no de la escuela. </li>
            </ul>
        </label>
        <textarea id="educacion" name="educacion"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['educacion'];?>
</textarea>
        <br />

        <h2>Trabajo</h2>

        <label for="trabajo">
            <ul>
                <li>Si tiene o ha tenido alg&uacute;n trabajo. </li>
                <li>Motivo por los cuales trabaja. </li>
                <li>Formas en que consigui&oacute; el trabajo. </li>
                <li>Problemas o dificultades que tiene o ha tenido. </li>
                <li>Importancia que le da. </li>
                <li>Qu&eacute; le gusta y qu&eacute; no del trabajo. </li>
            </ul>
        </label>
        <textarea id="trabajo" name="trabajo"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['trabajo'];?>
</textarea>
        <br />

        <h2>Instituciones</h2>

        <label for="como_llega">C&oacute;mo llega a Casa de Francisco:</label>
        <textarea id="como_llega" name="como_llega"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['como_llega'];?>
</textarea>
        <br />

        <label for="porque_viene">Por qu&eacute; viene a Casa de Francisco:</label>
        <textarea id="porque_viene" name="porque_viene"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['porque_viene'];?>
</textarea>
        <br />

        <label for="instituciones">Instituciones a las que ha asistido:</label>
        <textarea id="instituciones" name="instituciones"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['instituciones'];?>
</textarea>
        <br />

        <h2>Caracter&iacute;sticas Personales</h2>

        <label for="preocupaciones">Preocupaciones:</label>
        <textarea id="preocupaciones" name="preocupaciones"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['preocupaciones'];?>
</textarea>
        <br />

        <label for="que_hizo">Qu&eacute; hizo al respecto:</label>
        <textarea id="que_hizo" name="que_hizo"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['que_hizo'];?>
</textarea>
        <br />

        <label for="observaciones_personales">Observaciones:</label>
        <textarea id="observaciones_personales" name="observaciones_personales"><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['observaciones_personales'];?>
</textarea>
        <br />

        <input class="btnSubmit" type="button" name="enviar" value="Guardar" onclick="guardar();">

        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['id_alumno'];?>
" id="id_alumno" name="id_alumno" />
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['id_dato_medico'];?>
" id="id_dato_medico" name="id_dato_medico" />
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['id_personal'];?>
" id="id_personal" name="id_personal" />

    </form>
</body><?php }} ?>
