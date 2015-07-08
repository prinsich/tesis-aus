<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-27 06:12:24
         compiled from ".\templates\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8097558e22a8d37678-00954598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f40e8d74a32fed89b2b9e4d85c6d62d1098e097' => 
    array (
      0 => '.\\templates\\login\\index.html',
      1 => 1430877569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8097558e22a8d37678-00954598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558e22a9141d80_15935897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558e22a9141d80_15935897')) {function content_558e22a9141d80_15935897($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="ingreso") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/ingreso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="process-login") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/procces-login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
