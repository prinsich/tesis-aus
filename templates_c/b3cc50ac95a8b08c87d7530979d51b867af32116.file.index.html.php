<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 21:41:53
         compiled from ".\templates\talleres\index.html" */ ?>
<?php /*%%SmartyHeaderCode:14063577c53d1b822f4-68490510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3cc50ac95a8b08c87d7530979d51b867af32116' => 
    array (
      0 => '.\\templates\\talleres\\index.html',
      1 => 1457831826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14063577c53d1b822f4-68490510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c53d1c43336_18909302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c53d1c43336_18909302')) {function content_577c53d1c43336_18909302($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="buscar_talleres") {?>
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
    <?php echo $_smarty_tpl->getSubTemplate ("404_not_found.html.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
