<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-03 03:30:28
         compiled from ".\templates\alumnos\guardar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:2246554f3b61e3cb083-58771788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b434106e1e3e9c1804fbdedb22651c63ceb27cc' => 
    array (
      0 => '.\\templates\\alumnos\\guardar_alumno.html',
      1 => 1425349054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2246554f3b61e3cb083-58771788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f3b61e4a3c00_54626713',
  'variables' => 
  array (
    'accion' => 0,
    'apellido' => 0,
    'nombre' => 0,
    'dni' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f3b61e4a3c00_54626713')) {function content_54f3b61e4a3c00_54626713($_smarty_tpl) {?><h3> Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al alumno <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con D.N.I. <?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
</h3><?php }} ?>
