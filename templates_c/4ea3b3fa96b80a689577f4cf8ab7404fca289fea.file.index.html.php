<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-06 04:02:14
         compiled from ".\templates\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:271645549623b04eb60-89456478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea3b3fa96b80a689577f4cf8ab7404fca289fea' => 
    array (
      0 => '.\\templates\\login\\index.html',
      1 => 1430877569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271645549623b04eb60-89456478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5549623b4653e4_55354880',
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549623b4653e4_55354880')) {function content_5549623b4653e4_55354880($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="ingreso") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/ingreso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value=="process-login") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/procces-login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
