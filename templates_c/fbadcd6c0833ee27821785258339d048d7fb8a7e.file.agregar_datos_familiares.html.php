<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 17:11:06
         compiled from ".\templates\alumnos\agregar_datos_familiares.html" */ ?>
<?php /*%%SmartyHeaderCode:18296567ef240b20676-98521695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbadcd6c0833ee27821785258339d048d7fb8a7e' => 
    array (
      0 => '.\\templates\\alumnos\\agregar_datos_familiares.html',
      1 => 1451160390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18296567ef240b20676-98521695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567ef240d16a16_10912554',
  'variables' => 
  array (
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ef240d16a16_10912554')) {function content_567ef240d16a16_10912554($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_estado_civil')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_estado_civil.php';
?><h2>Grupo Familiar y/o de Convivencia</h2>
<table id="familiares">
    <tr>
        <th>Nombre y Apellido</th>
        <th>Parentesco</th>
        <th>Edad</th>
        <th>Estado Civil</th>
        <th>Vive en el Hogar</th>
        <th>Ocupaci&oacute;n</th>
    </tr>
    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 9+1 - (0) : 0-(9)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 0, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?>
    <tr>
        <td><input type="text" id="table_nombre" value="" name="nombre_apellido_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="inputntable letras" /></td>
        <td><input type="text" id="table_parentesco" value="" name="parentesco_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" /></td>
        <td><input type="text" id="table_edad" value="" name="edad_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="inputedad numeros" maxlength="2"/></td>
        <td><?php echo smarty_function_html_estado_civil(array('name'=>"estado_civil_".((string)$_smarty_tpl->tpl_vars['index']->value),'id'=>"table_estado_civil",'style'=>"width: 120px"),$_smarty_tpl);?>
</td>
        <td><select id="table_vive_hogar" name="vive_hogar_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" style="width: 40px"> 
                <option value="SI" selected="selected">Si</option>
                <option value="NO">No</option>
            </select>
        </td>
        <td><input type="text" id="table_ocupacion" value="" name="ocupacion_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" /></td>
    </tr> 
    <?php }} ?>
</table>

<label for="observaciones_familiares">Observaciones:</label>
<textarea id="observaciones_familiares" name="observaciones_familiares"></textarea>
<br />

<label for="relaciones_familiares">
    <ul>
        <li>Relaciones familiares. </li>
        <li>Din&aacute;mica Familiar. </li>
        <li>Momento de encuentro familiar. </li>
        <li>Problemas m&aacute;s comunes en su familia. </li>
        <li>Situaci&oacute;n econ&oacute;mica-laboral de su familia. </li>
        <li>Integraci&oacute;n de su familia a la comunidad. </li>
    </ul>
</label> 
<textarea id="relaciones_familiares" name="relaciones_familiares"></textarea>
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
<textarea id="grupo_amigo" name="grupo_amigo"></textarea>
<br />

<h2>Tiempo Libre</h2>

<label for="tiempo_libre">
    <ul>
        <li>Qu&eacute; actividades recreativas realiza. </li>
        <li>Qu&eacute; otras actividades recreativas le gustar&iacute;a realizar. </li>
    </ul>
</label>
<textarea id="tiempo_libre" name="tiempo_libre"></textarea>
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
<textarea id="educacion" name="educacion"></textarea>
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
<textarea id="trabajo" name="trabajo"></textarea>
<br />

<h2>Instituciones</h2>

<label for="como_llega">C&oacute;mo llega a Casa de Francisco:</label>
<textarea id="como_llega" name="como_llega"></textarea>
<br />

<label for="porque_viene">Por qu&eacute; viene a Casa de Francisco:</label>
<textarea id="porque_viene" name="porque_viene"></textarea>
<br />

<label for="instituciones">Instituciones a las que ha asistido:</label>
<textarea id="instituciones" name="instituciones"></textarea>
<br />

<h2>Caracter&iacute;sticas Personales</h2>

<label for="preocupaciones">Preocupaciones:</label>
<textarea id="preocupaciones" name="preocupaciones"></textarea>
<br />

<label for="que_hizo">Qu&eacute; hizo al respecto:</label>
<textarea id="que_hizo" name="que_hizo"></textarea>
<br />

<label for="observaciones_personales">Observaciones:</label>
<textarea id="observaciones_personales" name="observaciones_personales"></textarea>
<br /><?php }} ?>
