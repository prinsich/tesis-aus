<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-29 19:21:41
         compiled from ".\templates\admin\guardar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:256165591a2fc71e4f9-11806756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04304d41c0ed789cfef986a6dbd0773ce7b9856e' => 
    array (
      0 => '.\\templates\\admin\\guardar_usuario.html',
      1 => 1435616498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256165591a2fc71e4f9-11806756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5591a2fc7d1d76_83664513',
  'variables' => 
  array (
    'accion' => 0,
    'apellido' => 0,
    'nombre' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5591a2fc7d1d76_83664513')) {function content_5591a2fc7d1d76_83664513($_smarty_tpl) {?><h3>
    Se ha <?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
 con &eacute;xito al usuario <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 
    <br /><br />
    La contrase&ntilde;a fue enviada a <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 
</h3><?php }} ?>
