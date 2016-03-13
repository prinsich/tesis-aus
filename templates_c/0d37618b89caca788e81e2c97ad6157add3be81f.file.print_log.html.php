<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 19:35:56
         compiled from "templates\admin\print_log.html" */ ?>
<?php /*%%SmartyHeaderCode:2445856e496545d3498-71559343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d37618b89caca788e81e2c97ad6157add3be81f' => 
    array (
      0 => 'templates\\admin\\print_log.html',
      1 => 1457822154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2445856e496545d3498-71559343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e4965468d574_99139387',
  'variables' => 
  array (
    'log' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e4965468d574_99139387')) {function content_56e4965468d574_99139387($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['log']->value==null) {?>
<p>sin resultados</p>
<?php } else { ?>
<table border="1" cellpadding="6">
    <tr>
        <th><b>Usuario</b></th>
        <th><b>Fecha</b></th>
        <th><b>Acci&oacute;n</b></th>
        <th><b>Clase</b></th>
        <th><b>Objeto</b></th>
        <th><b>Observaciones</b></th>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['log']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user'];?>
</td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['date_time'],"Y/m/d H:i:s");?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['action'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['sobre'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['objeto'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['observaciones'];?>
</td>
    </tr>
    <?php endfor; endif; ?>
</table>
<?php }?>
<?php }} ?>
