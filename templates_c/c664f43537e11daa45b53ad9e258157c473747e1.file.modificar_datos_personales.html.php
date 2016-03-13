<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-08 21:39:05
         compiled from ".\templates\alumnos\modificar_datos_personales.html" */ ?>
<?php /*%%SmartyHeaderCode:12371567f09c4b24204-03487795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c664f43537e11daa45b53ad9e258157c473747e1' => 
    array (
      0 => '.\\templates\\alumnos\\modificar_datos_personales.html',
      1 => 1457483943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12371567f09c4b24204-03487795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567f09c4d24572_56425976',
  'variables' => 
  array (
    'datos_alumno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f09c4d24572_56425976')) {function content_567f09c4d24572_56425976($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_turnos')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_turnos.php';
if (!is_callable('smarty_function_html_checkbox_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_checkbox_talleres.php';
?><h2>Datos Personales</h2>
<p>Los campos marcado con <b>*</b> son obligatorios</p>

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
<input type="text" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datos_alumno']->value['fecha_nacimiento'],'d/m/Y');?>
" />
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
<?php }} ?>
