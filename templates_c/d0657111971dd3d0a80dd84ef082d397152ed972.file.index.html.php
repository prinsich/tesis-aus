<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-02 19:26:04
         compiled from ".\templates\alumnos\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2319954f38f148bbc22-81625509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0657111971dd3d0a80dd84ef082d397152ed972' => 
    array (
      0 => '.\\templates\\alumnos\\index.html',
      1 => 1425320310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2319954f38f148bbc22-81625509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f38f149ece17_19771797',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f38f149ece17_19771797')) {function content_54f38f149ece17_19771797($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_alumno") {?>
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
