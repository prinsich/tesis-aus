<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-29 05:30:51
         compiled from ".\templates\alumnos\guardar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:102865590bbeba0c9c4-24431247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ef5d53d52a22efa78d97e6571c613f4c8a0bf52' => 
    array (
      0 => '.\\templates\\alumnos\\guardar_alumno.html',
      1 => 1425349054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102865590bbeba0c9c4-24431247',
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
  'unifunc' => 'content_5590bbebacec12_98404759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590bbebacec12_98404759')) {function content_5590bbebacec12_98404759($_smarty_tpl) {?><h3> Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al alumno <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con D.N.I. <?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
</h3><?php }} ?>
