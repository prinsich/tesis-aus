<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 21:41:39
         compiled from ".\templates\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6687577c53c3d83e76-50118392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f553483d362a2a4f07d39f70f1224e1ca62e41bd' => 
    array (
      0 => '.\\templates\\login\\index.html',
      1 => 1457831807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6687577c53c3d83e76-50118392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c53c3dc9181_32788174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c53c3dc9181_32788174')) {function content_577c53c3dc9181_32788174($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="acceso") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/acceso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="lost_password") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/lost_password.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("404_not_found.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
