<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-26 23:47:36
         compiled from ".\templates\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25269558dc87846e711-72114802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f85214c3918d2490150a8724dafe39d3c0663b2' => 
    array (
      0 => '.\\templates\\login\\index.html',
      1 => 1430877569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25269558dc87846e711-72114802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558dc878839d07_22825045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558dc878839d07_22825045')) {function content_558dc878839d07_22825045($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="ingreso") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/ingreso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="process-login") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/procces-login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
