<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 00:53:01
         compiled from ".\templates\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:166515595eeaa22cc91-52154491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f553483d362a2a4f07d39f70f1224e1ca62e41bd' => 
    array (
      0 => '.\\templates\\login\\index.html',
      1 => 1435895572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166515595eeaa22cc91-52154491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5595eeaa2b9578_24508873',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5595eeaa2b9578_24508873')) {function content_5595eeaa2b9578_24508873($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="acceso") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/acceso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="registro") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/registro.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="lost_password") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/lost_password.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
