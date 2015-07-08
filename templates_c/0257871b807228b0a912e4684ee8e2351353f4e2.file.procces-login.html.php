<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-06 06:34:30
         compiled from ".\templates\login\procces-login.html" */ ?>
<?php /*%%SmartyHeaderCode:385555497c46d64d73-71478915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0257871b807228b0a912e4684ee8e2351353f4e2' => 
    array (
      0 => '.\\templates\\login\\procces-login.html',
      1 => 1430886861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385555497c46d64d73-71478915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55497c470b4d97_57589356',
  'variables' => 
  array (
    'logon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55497c470b4d97_57589356')) {function content_55497c470b4d97_57589356($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logon']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        //location.replace('index.php');
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/ingreso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <p style="color: red">EL usuario o la contrase&ntilde;a son incorrectas </p>
<?php }?><?php }} ?>
