<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-27 06:43:29
         compiled from ".\templates\alumnos\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23380558e29f17fe235-46778855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c5382bacb33bf20a73f306cd7d7c24897f48d0' => 
    array (
      0 => '.\\templates\\alumnos\\index.html',
      1 => 1425320310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23380558e29f17fe235-46778855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558e29f206a1a2_96837196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558e29f206a1a2_96837196')) {function content_558e29f206a1a2_96837196($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_alumno") {?>
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
