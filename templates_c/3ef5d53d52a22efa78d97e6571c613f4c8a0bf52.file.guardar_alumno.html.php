<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 18:42:46
         compiled from ".\templates\alumnos\guardar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:18062567f09d60c30a5-24549201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '18062567f09d60c30a5-24549201',
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
  'unifunc' => 'content_567f09d61904e3_67840167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f09d61904e3_67840167')) {function content_567f09d61904e3_67840167($_smarty_tpl) {?><h3> Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al alumno <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con D.N.I. <?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
</h3><?php }} ?>
