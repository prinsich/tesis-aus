<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 19:18:37
         compiled from ".\templates\alumnos\agregar_datos_medicos.html" */ ?>
<?php /*%%SmartyHeaderCode:208235590aedb969514-79768010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f179fc265186ae6608553760e26610fc54793b2' => 
    array (
      0 => '.\\templates\\alumnos\\agregar_datos_medicos.html',
      1 => 1435803241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208235590aedb969514-79768010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5590aedb992482_30527811',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590aedb992482_30527811')) {function content_5590aedb992482_30527811($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_grupo_sanguineo')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_grupo_sanguineo.php';
?><label for="grupo_sanguineo">Grupo Sangu&iacute;neo:</label> 
<?php echo smarty_function_html_grupo_sanguineo(array('name'=>"grupo_sanguineo"),$_smarty_tpl);?>

<br />

<label for="vacunacion">Vacunaci&oacute;n:</label> 
<select id="vacunacion" name="vacunacion" onchange="ver_vac_faltantes()" style="width: 125px"> 
    <option value="0" selected=""> SELECCIONAR </option>
    <option value="I"> INCOMPLETAS </option>
    <option value="C"> COMPLETAS </option>
</select>
<br />

<div id="vac_faltantes" style="display: none">
    <label for="vacunas_faltantes">Vacunas Faltantes:</label>
    <textarea id="vacunas_faltantes" name="vacunas_faltantes"></textarea>
    <br />
</div>

<label for="enfermedades_padecidas">Enfermedades Padecidas (especificar edad aproximada):</label>
<textarea id="enfermedades_padecidas" name="enfermedades_padecidas"></textarea>
<br />

<label for="alergias">Alergias:</label>
<textarea id="alergias" name="alergias"></textarea>
<br />

<label for="secuelas">Secuelas:</label>
<textarea id="secuelas" name="secuelas"></textarea>
<br />

<label for="cuidados_especiales">Cuidados Especiales:</label>
<textarea id="cuidados_especiales" name="cuidados_especiales"></textarea>
<br />

<label for="enfermedades_cogenitas">Enfermedades Cong&eacute;nitas:</label>
<textarea id="enfermedades_cogenitas" name="enfermedades_cogenitas"></textarea>
<br />

<label for="cirugias">Cirug&iacute;as (especificar edad aproximada):</label>
<textarea id="cirugias" name="cirugias"></textarea>
<br />

<label for="tratamientos_prolongados">Tratamientos M&eacute;dicos Prolongados:</label>
<textarea id="tratamientos_prolongados" name="tratamientos_prolongados"></textarea>
<br />

<label for="tratamientos_actuales">Tratamientos M&eacute;dicos Actuales:</label>
<textarea id="tratamientos_actuales" name="tratamientos_actuales"></textarea>
<br />

<label for="medicacion_actual">Medicamentos que toma actualmente:</label>
<textarea id="medicacion_actual" name="medicacion_actual"></textarea>
<br />

<label for="urgencias">En caso de URGENCIA, M&eacute;dicos autorizados para su tratamiento y Hospitales o Centros M&eacute;dicos para su traslado:</label>
<textarea id="urgencias" name="urgencias"></textarea>
<br />

<label for="obra_social">Obra Social:</label>
<input type="text" value="" id="obra_social" name="obra_social" />
<br />


<h3>El taller se encuentra protegido por Seguro San Crist&iacute;bal.</h3><?php }} ?>
