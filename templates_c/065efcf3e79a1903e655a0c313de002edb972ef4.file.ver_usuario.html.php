<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 18:10:22
         compiled from ".\templates\admin\ver_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:3161356e485be7f3314-06273302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '065efcf3e79a1903e655a0c313de002edb972ef4' => 
    array (
      0 => '.\\templates\\admin\\ver_usuario.html',
      1 => 1435889826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3161356e485be7f3314-06273302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato_usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e485be88c239_58054519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e485be88c239_58054519')) {function content_56e485be88c239_58054519($_smarty_tpl) {?><style>
    td { /*border: none;*/ text-align: left; /*width: 10%;*/}
</style>
<h1>Datos del Usuario</h1>

<h2>Datos de Login</h2>
<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Usuario</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombreusr'];?>
</b></td>
    </tr>
    <tr>
        <td>Perfil:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['perfil'];?>
</b></td>
    </tr>
</table>

<h2>Datos Personales</h2>
<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Apellido:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['apellido'];?>
</b></td>
    </tr>
    <tr>
        <td>Nombres:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombre'];?>
</b></td>
    </tr>
    <tr>
        <td>Domicilio:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['domicilio'];?>
</b></td>
    </tr>
    <tr>
        <td>Tel&eacute;fono:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['telefono'];?>
</b></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['email'];?>
</b></td>
    </tr>
</table>

<input class="btnSubmit" type="button" name="volver" value="Volver" onclick="history.back();">
<?php }} ?>
