<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 03:44:54
         compiled from ".\templates\talleres\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1944454f4edde5f3610-05007072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28f2a26bcf378d8a495026665cf1419456432633' => 
    array (
      0 => '.\\templates\\talleres\\index.html',
      1 => 1425609888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944454f4edde5f3610-05007072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f4edde6d8957_00635209',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f4edde6d8957_00635209')) {function content_54f4edde6d8957_00635209($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_talleres") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("talleres/buscar_talleres.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="agregar_taller") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("talleres/agregar_taller.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="guardar_taller") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("talleres/guardar_taller.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="listar_talleres") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("talleres/listar_talleres.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="modificar_taller") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("talleres/modificar_taller.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="ver_taller") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("talleres/ver_taller.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
