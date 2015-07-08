<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 20:03:27
         compiled from ".\templates\capacitadores\ver_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:1895154f7ad70c1ea10-98915825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e88927eb0e26ba42c972988349e5a882e0d6d85' => 
    array (
      0 => '.\\templates\\capacitadores\\ver_capacitador.html',
      1 => 1426380783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895154f7ad70c1ea10-98915825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f7ad70d42165_60156609',
  'variables' => 
  array (
    'datos_capacitador' => 0,
    'cantidad_talleres' => 0,
    'lista_talleres' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f7ad70d42165_60156609')) {function content_54f7ad70d42165_60156609($_smarty_tpl) {?><style>
    td { /*border: none;*/ text-align: left; /*width: 10%;*/}
</style>
<h1>Datos del Capacitador</h1>
<h2>Datos Personales</h2>
<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Apellido:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['apellido'];?>
</b></td>
    </tr>
    <tr>
        <td>Nombres:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['nombre'];?>
</b></td>
    </tr>
    <tr>
        <td>DNI:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['dni'];?>
</b></td>
    </tr>
    <tr>
        <td>Sexo:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['sexo'];?>
</b></td>
    </tr>
    <tr>
        <td>Domicilio:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['domicilio'];?>
</b></td>
    </tr>
    <tr>
        <td>Tel&eacute;fono:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['telefono'];?>
</b></td>
    </tr>
    <tr>
        <td>Celular:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['celular'];?>
</b></td>
    </tr>
    <tr>
        <td>Fecha de Nacimiento:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['fecha_nacimiento'];?>
</b></td>
    </tr>

</table>

<h2>Listado de Talleres que dicta</h2>
<p>cantidad de talleres: <?php echo $_smarty_tpl->tpl_vars['cantidad_talleres']->value;?>
</p>
<table style="width: 50%; border: none; padding-left: 10%;" >
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_talleres']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
    <tr>
        <td>&DoubleRightArrow; <?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['nombre'];?>
</td>
        <?php endfor; endif; ?>
    </tr>
</table>
<input class="btnSubmit2" type="button" name="volver" value="volver" onclick="history.back();">
<?php }} ?>
