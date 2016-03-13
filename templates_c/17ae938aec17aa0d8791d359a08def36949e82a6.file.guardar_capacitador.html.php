<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-13 00:01:39
         compiled from ".\templates\capacitadores\guardar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:2490756e4d8135dabc9-69351104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17ae938aec17aa0d8791d359a08def36949e82a6' => 
    array (
      0 => '.\\templates\\capacitadores\\guardar_capacitador.html',
      1 => 1425510151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2490756e4d8135dabc9-69351104',
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
  'unifunc' => 'content_56e4d81362c240_08068997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e4d81362c240_08068997')) {function content_56e4d81362c240_08068997($_smarty_tpl) {?><h3> Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al capacitador <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con D.N.I. <?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
</h3><?php }} ?>
