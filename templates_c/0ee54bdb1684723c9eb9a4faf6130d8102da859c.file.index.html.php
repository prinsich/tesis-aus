<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 22:13:02
         compiled from ".\templates\capacitadores\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1307654f73aee7dda48-36495401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee54bdb1684723c9eb9a4faf6130d8102da859c' => 
    array (
      0 => '.\\templates\\capacitadores\\index.html',
      1 => 1425503578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1307654f73aee7dda48-36495401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f73aee8bfb66_40679019',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f73aee8bfb66_40679019')) {function content_54f73aee8bfb66_40679019($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_capacitadores") {?>
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
