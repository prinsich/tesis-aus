<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 16:36:13
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:893256eb06a75be640-06238342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd34b5ce869dbc75980c381d38708284f5becfff' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1458243345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '893256eb06a75be640-06238342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56eb06a7d37836_81271063',
  'variables' => 
  array (
    'section' => 0,
    'logueado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb06a7d37836_81271063')) {function content_56eb06a7d37836_81271063($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['section']->value=='') {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="login") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="logout") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_smarty_tpl->tpl_vars['logueado']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("accedo_denegado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
