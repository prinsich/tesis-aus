<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 23:06:01
         compiled from ".\templates\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5789559194688f77e1-85320822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '416a237c750aaca3e772e63d1082bd2583a286ec' => 
    array (
      0 => '.\\templates\\admin\\index.html',
      1 => 1436234733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5789559194688f77e1-85320822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55919468ae9a53_09993327',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55919468ae9a53_09993327')) {function content_55919468ae9a53_09993327($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="admin") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/admin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="buscar_usuario") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/buscar_usuario.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="agregar_usuario") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/agregar_usuario.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="guardar_usuario") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/guardar_usuario.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="listar_usuarios") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/listar_usuarios.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="ver_usuario") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/ver_usuario.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="modificar_usuario") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/modificar_usuario.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="ver_registro") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/ver_registro.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="print_log") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("admin/print_log.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
