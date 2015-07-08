<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-28 00:48:02
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:21498558e22a7aa5779-85332758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c57248002ccbc2777e9653db7d996c43ef7e3aa' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1435429630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21498558e22a7aa5779-85332758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558e22a8213a22_05959465',
  'variables' => 
  array (
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558e22a8213a22_05959465')) {function content_558e22a8213a22_05959465($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['section']->value==''||$_smarty_tpl->tpl_vars['section']->value=="login"||$_smarty_tpl->tpl_vars['section']->value=="home"||$_smarty_tpl->tpl_vars['section']->value=="alumnos"||$_smarty_tpl->tpl_vars['section']->value=="capacitadores"||$_smarty_tpl->tpl_vars['section']->value=="talleres"||$_smarty_tpl->tpl_vars['section']->value=="certificados") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
