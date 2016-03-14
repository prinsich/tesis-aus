<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:35:56
         compiled from ".\templates\admin\guardar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:3017656e63c7c7993f8-11990745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04304d41c0ed789cfef986a6dbd0773ce7b9856e' => 
    array (
      0 => '.\\templates\\admin\\guardar_usuario.html',
      1 => 1457930139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3017656e63c7c7993f8-11990745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e63c7c837a39_92050466',
  'variables' => 
  array (
    'accion' => 0,
    'apellido' => 0,
    'nombre' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e63c7c837a39_92050466')) {function content_56e63c7c837a39_92050466($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
    window.setInterval(function() {
        window.location = "index.php?section=admin&sub=listar_usuarios";
    }, 2000);
});
<?php echo '</script'; ?>
>
<h3>
    Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al usuario <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

    <br /><br />
    <?php if ($_smarty_tpl->tpl_vars['accion']->value=="registrado") {?>
    La contrase&ntilde;a fue enviada a <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

    <?php }?>
</h3>
<?php }} ?>
