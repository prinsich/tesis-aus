<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 19:04:28
         compiled from ".\templates\certificados\alumnos.html" */ ?>
<?php /*%%SmartyHeaderCode:25380567f09b766c0f3-27213324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a1e93f0bb6d537563fe19bd2976b621e49e9be' => 
    array (
      0 => '.\\templates\\certificados\\alumnos.html',
      1 => 1451167450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25380567f09b766c0f3-27213324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567f09b7821326_28061548',
  'variables' => 
  array (
    'lista_alumnos' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f09b7821326_28061548')) {function content_567f09b7821326_28061548($_smarty_tpl) {?><h2>Alumnos</h2>
<?php if ($_smarty_tpl->tpl_vars['lista_alumnos']->value==null) {?>
<h3 align="center">SIN RESULTADOS</h3>
<?php } else { ?>
<table class="zebra-striped" id="sortTableExample">
    <thead>
        <tr>
            <th>#</th>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(1, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_alumnos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['apellido'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['dni'];?>
</td>
            <td>
                <select name="estado_<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
" id="estado_<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
" class="estadoselect"> 
                    <option value="a" selected="selected">Asisti&oacute;</option>
                    <option value="c">Capacit&oacute;</option>
                </select>
            </td>
            <td>
                <img src="images/icons/document_add.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="crear_certificado('<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
')"/>
            </td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
        <?php endfor; endif; ?>
    </tbody>
</table>
<?php }?><?php }} ?>
