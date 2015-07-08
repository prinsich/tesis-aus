<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-29 00:51:54
         compiled from ".\templates\capacitadores\index.html" */ ?>
<?php /*%%SmartyHeaderCode:290355590c0daf2fe05-80623070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0286757af5dc0ccadea3a7059e376b28345991' => 
    array (
      0 => '.\\templates\\capacitadores\\index.html',
      1 => 1425503578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290355590c0daf2fe05-80623070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5590c0db1c0698_38528382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590c0db1c0698_38528382')) {function content_5590c0db1c0698_38528382($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_capacitadores") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("capacitadores/buscar_capacitadores.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="agregar_capacitador") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("capacitadores/agregar_capacitador.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="guardar_capacitador") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("capacitadores/guardar_capacitador.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="listar_capacitadores") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("capacitadores/listar_capacitadores.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="ver_capacitador") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("capacitadores/ver_capacitador.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="modificar_capacitador") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("capacitadores/modificar_capacitador.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
