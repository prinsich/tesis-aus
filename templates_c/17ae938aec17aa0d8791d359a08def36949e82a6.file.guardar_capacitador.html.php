<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 19:03:05
         compiled from ".\templates\capacitadores\guardar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:12355931219ad9cf4-41032449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '12355931219ad9cf4-41032449',
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
  'unifunc' => 'content_55931219ba2629_07107269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55931219ba2629_07107269')) {function content_55931219ba2629_07107269($_smarty_tpl) {?><h3> Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al capacitador <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con D.N.I. <?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
</h3><?php }} ?>
