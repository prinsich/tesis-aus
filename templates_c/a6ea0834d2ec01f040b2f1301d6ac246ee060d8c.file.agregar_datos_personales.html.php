<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-06 09:27:26
         compiled from ".\templates\alumnos\agregar_datos_personales.html" */ ?>
<?php /*%%SmartyHeaderCode:29059577cf92e82bfe5-33146674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ea0834d2ec01f040b2f1301d6ac246ee060d8c' => 
    array (
      0 => '.\\templates\\alumnos\\agregar_datos_personales.html',
      1 => 1467749794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29059577cf92e82bfe5-33146674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577cf92e9255d3_53995121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf92e9255d3_53995121')) {function content_577cf92e9255d3_53995121($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_turnos')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_turnos.php';
if (!is_callable('smarty_function_html_checkbox_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_checkbox_talleres.php';
?>
    <h2>Datos Personales</h2>
    <p>Los campos marcados con <b>*</b> son obligatorios</p>

    <label for="apellido">Apellido(*):</label>
    <input type="text" value="" id="apellido" name="apellido" class="letras"/>
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="" id="nombre" name="nombre" class="letras"/>
    <br />

    <label for="sexo">Sexo(*):</label>
    <select name="sexo" id="sexo" style="width: 300px;">
        <option value="00" selected="selected"> SELECCIONAR </option>
        <option value="M" >MASCULINO</option>
        <option value="F" >FEMENINO</option>
    </select>
    <br />

    <label for="domicilio">Domicilio(*):</label>
    <input type="text" value="" id="domicilio" name="domicilio"/>
    <br />

    <label for="barrio">Barrio:</label>
    <input type="text" value="" id="barrio" name="barrio"/>
    <br />

    <label for="telefono">Tel&eacute;fono(*):</label>
    <input type="text" value="" id="telefono" name="telefono" class="numeros" maxlength="15" />
    <br />

    <label for="dni">DNI(*):</label>
    <input type="text" value="" id="dni" name="dni" class="numeros" maxlength="8" />
    <br />

    <label for="fecha_nacimiento">Fecha de Nacimiento(*):</label>
    <input type="text" value="" id="fecha_nacimiento" name="fecha_nacimiento" />
    <br />

    <label for="escuela">Escuela:</label>
    <input type="text" value="" id="escuela" name="escuela" />
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
<?php }} ?>
