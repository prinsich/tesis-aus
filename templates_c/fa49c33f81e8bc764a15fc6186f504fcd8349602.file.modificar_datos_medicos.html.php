<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-01 23:14:37
         compiled from ".\templates\alumnos\modificar_datos_medicos.html" */ ?>
<?php /*%%SmartyHeaderCode:19524559360d4126f59-92748763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa49c33f81e8bc764a15fc6186f504fcd8349602' => 
    array (
      0 => '.\\templates\\alumnos\\modificar_datos_medicos.html',
      1 => 1435803271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19524559360d4126f59-92748763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559360d424b708_79265652',
  'variables' => 
  array (
    'datos_medicos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559360d424b708_79265652')) {function content_559360d424b708_79265652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_grupo_sanguineo')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_grupo_sanguineo.php';
?><label for="grupo_sanguineo">Grupo Sangu&iacute;neo:</label>
<?php echo smarty_function_html_grupo_sanguineo(array('name'=>"grupo_sanguineo",'seleccionar'=>$_smarty_tpl->tpl_vars['datos_medicos']->value['id_grupo_sanguineo']),$_smarty_tpl);?>

<br />

<label for="vacunacion">Vacunaci&oacute;n:</label> 
<select id="vacunacion" name="vacunacion" onchange="ver_vac_faltantes()" style="width: 125px"> 
    <?php if ($_smarty_tpl->tpl_vars['datos_medicos']->value['vacunacion']=="I") {?>
    <option value="0"> SELECCIONAR </option>
    <option value="I" selected="">INCOMPLETAS</option>
    <option value="C">COMPLETAS</option>
    <?php } elseif ($_smarty_tpl->tpl_vars['datos_medicos']->value['vacunacion']=="C") {?>
    <option value="0"> SELECCIONAR </option>
    <option value="I">INCOMPLETAS</option>
    <option value="C" selected="">COMPLETAS</option>
    <?php } else { ?>
    <option value="0" selected=""> SELECCIONAR </option>
    <option value="I">INCOMPLETAS</option>
    <option value="C">COMPLETAS</option>
    <?php }?>
</select>
<br />

<?php if ($_smarty_tpl->tpl_vars['datos_medicos']->value['vacunacion']=="COMPLETAS") {?>
<div id="vac_faltantes" style="display: none">
<?php } else { ?>    
<div id="vac_faltantes" style="display: inline">
<?php }?>
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

<h3>El taller se encuentra protegido por Seguro San Crist&iacute;bal.</h3><?php }} ?>
