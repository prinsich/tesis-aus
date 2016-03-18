<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 16:36:14
         compiled from ".\templates\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:358656eb072e01dd69-47627017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532cdfed3168a3b2c71522433b437acfb11be9c8' => 
    array (
      0 => '.\\templates\\login\\index.tpl',
      1 => 1458243345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358656eb072e01dd69-47627017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56eb072e05b124_15424199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb072e05b124_15424199')) {function content_56eb072e05b124_15424199($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="acceso") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/acceso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="lost_password") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/lost_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("404_not_found.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
