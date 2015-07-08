<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-27 18:04:50
         compiled from ".\templates\certificados\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9437558ec9a2648c11-73951855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6e9bd5737b696319730823ebc0911e977d1837' => 
    array (
      0 => '.\\templates\\certificados\\index.html',
      1 => 1425612197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9437558ec9a2648c11-73951855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558ec9a2b6df54_75273556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558ec9a2b6df54_75273556')) {function content_558ec9a2b6df54_75273556($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="crear_certificados") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/crear_certificados.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['sub']->value==''||$_smarty_tpl->tpl_vars['sub']->value=="imprimir") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("certificados/certificado.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
