<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-26 23:47:34
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19262558dc8768a3dc4-70258012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca39df3d0b7b3741e994980b343b3e0e3651e6a5' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1430864507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19262558dc8768a3dc4-70258012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558dc8772c9e04_29818451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558dc8772c9e04_29818451')) {function content_558dc8772c9e04_29818451($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['section']->value==''||$_smarty_tpl->tpl_vars['section']->value=="login"||$_smarty_tpl->tpl_vars['section']->value=="home"||$_smarty_tpl->tpl_vars['section']->value=="alumnos"||$_smarty_tpl->tpl_vars['section']->value=="capacitadores"||$_smarty_tpl->tpl_vars['section']->value=="talleres"||$_smarty_tpl->tpl_vars['section']->value=="certificados") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
