<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-06 09:40:39
         compiled from ".\templates\alumnos\modificar_datos_familiares.html" */ ?>
<?php /*%%SmartyHeaderCode:964577cfc47604723-01589090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '199ac648169806bab4ca8704378744f798d62822' => 
    array (
      0 => '.\\templates\\alumnos\\modificar_datos_familiares.html',
      1 => 1467514397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964577cfc47604723-01589090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos_familiares' => 0,
    'index' => 0,
    'i' => 0,
    'datos_personales' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577cfc478726f6_48204417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfc478726f6_48204417')) {function content_577cfc478726f6_48204417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_estado_civil')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_estado_civil.php';
?><h2>Grupo Familiar y/o de Convivencia</h2>

<table id="familiares">
    <tr>
        <th style="width: 20px">Nombre y Apellido</th>
        <th style="width: 20px">Parentesco</th>
        <th style="width: 10px">Edad</th>
        <th style="width: 10px">Estado Civil</th>
        <th style="width: 10px">Vive en el Hogar</th>
        <th style="width: 10px">Ocupaci&oacute;n</th>
        <th style="width: 10px">Tutor Legal</th>
    </tr>
    <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(0, null, 0);?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']);
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
        <input type="hidden" id="table_checkbox_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['id_familiar'];?>
" name="id_familiar_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" />
        <td>
            <input type="text" id="table_nombre_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['nombre_apellido'];?>
" name="nombre_apellido_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="inputntable letras" />
        </td>
        <td>
            <input type="text" id="table_parentesco_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['parentesco'];?>
" name="parentesco_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" />
        </td>
        <td>
            <input type="text" id="table_edad_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['edad'];?>
" name="edad_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="inputedad numeros" maxlength="2" />
        </td>
        <td><?php echo smarty_function_html_estado_civil(array('name'=>"estado_civil_".((string)$_smarty_tpl->tpl_vars['index']->value),'id'=>"table_estado_civil",'seleccionar'=>$_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['id_est_civil'],'style'=>"width: 120px"),$_smarty_tpl);?>
</td>
        <td>
            <select id="table_vive_hogar_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="vive_hogar_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" style="width: 40px">
                <?php if ($_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['vive_hogar']=="SI") {?>
                <option value="SI" selected>Si</option>
                <option value="NO">No</option>
                <?php } else { ?>
                <option value="SI">Si</option>
                <option value="NO" selected>No</option>
                <?php }?>
            </select>
        </td>
        <td>
            <input type="text" id="table_ocupacion_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['ocupacion'];?>
" name="ocupacion_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" />
        </td>
        <td>
            <input type="radio" id="tutor_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="tutor_legal" <?php if ($_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['tutor_legal']==1) {?> checked="" <?php }?>/>
        </td>
    </tr>
    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?> <?php endfor; endif; ?> <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - ($_smarty_tpl->tpl_vars['index']->value) : $_smarty_tpl->tpl_vars['index']->value-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['index']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <tr>
        <input type="hidden" id="table_checkbox_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="null" name="id_familiar_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />
        <td>
            <input type="text" id="table_nombre_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="" name="nombre_apellido_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="inputntable letras" />
        </td>
        <td>
            <input type="text" id="table_parentesco_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="" name="parentesco_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />
        </td>
        <td>
            <input type="text" id="table_edad_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="" name="edad_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="inputedad numeros" maxlength="2" />
        </td>
        <td><?php echo smarty_function_html_estado_civil(array('name'=>"estado_civil_".((string)$_smarty_tpl->tpl_vars['i']->value),'id'=>"table_estado_civil",'style'=>"width: 120px"),$_smarty_tpl);?>
</td>
        <td>
            <select id="table_vive_hogar_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="vive_hogar_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="width: 40px">
                <option value="SI" selected="selected">Si</option>
                <option value="NO">No</option>
            </select>
        </td>
        <td>
            <input type="text" id="table_ocupacion_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="" name="ocupacion_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />
        </td>
        <td>
            <input type="radio" id="tutor_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" name="tutor_legal" />
        </td>
    </tr>
    <?php }} ?>
</table>

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
<?php }} ?>
