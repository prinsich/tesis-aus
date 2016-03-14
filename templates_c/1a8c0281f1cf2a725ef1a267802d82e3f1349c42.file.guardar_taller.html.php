<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:09:52
         compiled from ".\templates\talleres\guardar_taller.html" */ ?>
<?php /*%%SmartyHeaderCode:308956e1b07190af67-18061387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8c0281f1cf2a725ef1a267802d82e3f1349c42' => 
    array (
      0 => '.\\templates\\talleres\\guardar_taller.html',
      1 => 1457928568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308956e1b07190af67-18061387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e1b0719562d3_60512572',
  'variables' => 
  array (
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1b0719562d3_60512572')) {function content_56e1b0719562d3_60512572($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
    window.setInterval(function() {
        window.location = "index.php?section=talleres&sub=listar_talleres";
    }, 2000);
});
<?php echo '</script'; ?>
>
<h3> <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 se ha agregado a la lista de talleres </h3>
<?php }} ?>
