<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-05 00:13:50
         compiled from ".\templates\capacitadores\guardar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:2992054f791ae395fe2-21817128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1391972f9d5718bdf3de77ae80c9c11e9e9a46d0' => 
    array (
      0 => '.\\templates\\capacitadores\\guardar_capacitador.html',
      1 => 1425510151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2992054f791ae395fe2-21817128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accion' => 0,
    'apellido' => 0,
    'nombre' => 0,
    'dni' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f791ae4622d2_47468375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f791ae4622d2_47468375')) {function content_54f791ae4622d2_47468375($_smarty_tpl) {?><h3> Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al capacitador <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con D.N.I. <?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
</h3><?php }} ?>
