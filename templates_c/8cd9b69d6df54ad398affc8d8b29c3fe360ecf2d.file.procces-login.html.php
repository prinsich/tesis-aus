<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-27 06:16:24
         compiled from ".\templates\login\procces-login.html" */ ?>
<?php /*%%SmartyHeaderCode:25777558e22e8d1f608-87911814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd9b69d6df54ad398affc8d8b29c3fe360ecf2d' => 
    array (
      0 => '.\\templates\\login\\procces-login.html',
      1 => 1435378561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25777558e22e8d1f608-87911814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558e22e8eeffb8_09481571',
  'variables' => 
  array (
    'logon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558e22e8eeffb8_09481571')) {function content_558e22e8eeffb8_09481571($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logon']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        location.href = "index.php"
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/ingreso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <p style="color: red">EL usuario o la contrase&ntilde;a son incorrectas </p>
<?php }?><?php }} ?>
