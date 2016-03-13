<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-13 02:47:30
         compiled from ".\templates\perfil\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1876656e22d84a26245-49606980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46c0461c9d9130f93608a08d310ae27283b15d61' => 
    array (
      0 => '.\\templates\\perfil\\index.html',
      1 => 1457831807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1876656e22d84a26245-49606980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e22d84a7ebd0_29291817',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e22d84a7ebd0_29291817')) {function content_56e22d84a7ebd0_29291817($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="ver") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("perfil/ver_perfil.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("404_not_found.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
