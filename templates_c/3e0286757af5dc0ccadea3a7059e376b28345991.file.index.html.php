<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 21:41:50
         compiled from ".\templates\capacitadores\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17609577c53cec7f4e2-29377676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0286757af5dc0ccadea3a7059e376b28345991' => 
    array (
      0 => '.\\templates\\capacitadores\\index.html',
      1 => 1457831807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17609577c53cec7f4e2-29377676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c53ced3bd05_92025242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c53ced3bd05_92025242')) {function content_577c53ced3bd05_92025242($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_capacitadores") {?>
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
	<?php echo $_smarty_tpl->getSubTemplate ("404_not_found.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
