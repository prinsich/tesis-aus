<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-06 09:41:29
         compiled from ".\templates\certificados\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2530577cfc790467d0-39834100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f164f39be9020b14645eaaf7ed249dee025a60bd' => 
    array (
      0 => '.\\templates\\certificados\\index.html',
      1 => 1457831807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2530577cfc790467d0-39834100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577cfc790f0849_24674198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfc790f0849_24674198')) {function content_577cfc790f0849_24674198($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="crear_certificados") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/crear_certificados.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="imprimir") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/certificado.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("404_not_found.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
