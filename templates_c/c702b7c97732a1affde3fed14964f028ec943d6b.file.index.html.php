<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 04:23:20
         compiled from ".\templates\certificados\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1386754f8b7d05a9962-13786538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c702b7c97732a1affde3fed14964f028ec943d6b' => 
    array (
      0 => '.\\templates\\certificados\\index.html',
      1 => 1425612197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386754f8b7d05a9962-13786538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f8b7d068b420_13719225',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f8b7d068b420_13719225')) {function content_54f8b7d068b420_13719225($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="crear_certificados") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/crear_certificados.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="imprimir") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/certificado.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
