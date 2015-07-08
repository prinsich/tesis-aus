<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-06 00:22:59
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:588854f38f123d6063-20601153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d186252932df293c0649e11672b3a9ae124ba4' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1430864507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588854f38f123d6063-20601153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f38f124bd513_15312640',
  'variables' => 
  array (
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f38f124bd513_15312640')) {function content_54f38f124bd513_15312640($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['section']->value==''||$_smarty_tpl->tpl_vars['section']->value=="login"||$_smarty_tpl->tpl_vars['section']->value=="home"||$_smarty_tpl->tpl_vars['section']->value=="alumnos"||$_smarty_tpl->tpl_vars['section']->value=="capacitadores"||$_smarty_tpl->tpl_vars['section']->value=="talleres"||$_smarty_tpl->tpl_vars['section']->value=="certificados") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
