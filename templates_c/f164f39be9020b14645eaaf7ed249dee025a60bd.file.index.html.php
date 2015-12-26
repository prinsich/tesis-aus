<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 18:42:11
         compiled from ".\templates\certificados\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5814567f09b30edcf6-81550153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f164f39be9020b14645eaaf7ed249dee025a60bd' => 
    array (
      0 => '.\\templates\\certificados\\index.html',
      1 => 1425612197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5814567f09b30edcf6-81550153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567f09b32363d9_89060826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f09b32363d9_89060826')) {function content_567f09b32363d9_89060826($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="crear_certificados") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/crear_certificados.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="imprimir") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/certificado.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
