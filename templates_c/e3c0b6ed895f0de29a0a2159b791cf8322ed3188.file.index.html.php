<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 17:02:07
         compiled from ".\templates\alumnos\index.html" */ ?>
<?php /*%%SmartyHeaderCode:20108567ef23f6611a4-16814342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c0b6ed895f0de29a0a2159b791cf8322ed3188' => 
    array (
      0 => '.\\templates\\alumnos\\index.html',
      1 => 1425320310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20108567ef23f6611a4-16814342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567ef2400083a7_48859859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ef2400083a7_48859859')) {function content_567ef2400083a7_48859859($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/buscar_alumno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="agregar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_alumno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="guardar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/guardar_alumno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="listar_alumnos") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/listar_alumnos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="ver_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/ver_alumno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="modificar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/modificar_alumno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
