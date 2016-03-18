<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 16:36:26
         compiled from ".\templates\alumnos\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3211156eb073a334d25-23147865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9206da887613b0620303756fe0bf20f36387f45d' => 
    array (
      0 => '.\\templates\\alumnos\\index.tpl',
      1 => 1458243345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3211156eb073a334d25-23147865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56eb073a3f1081_27092528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb073a3f1081_27092528')) {function content_56eb073a3f1081_27092528($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/buscar_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="agregar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="guardar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/guardar_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="listar_alumnos") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/listar_alumnos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="ver_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/ver_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="modificar_alumno") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("alumnos/modificar_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("404_not_found.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
