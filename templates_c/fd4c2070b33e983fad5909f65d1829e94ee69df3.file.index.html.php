<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 12:58:08
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1353956684f902b3f42-70511508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd4c2070b33e983fad5909f65d1829e94ee69df3' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1448512185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353956684f902b3f42-70511508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56684f9098e230_64106329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56684f9098e230_64106329')) {function content_56684f9098e230_64106329($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['section']->value==''||$_smarty_tpl->tpl_vars['section']->value=="home"||$_smarty_tpl->tpl_vars['section']->value=="alumnos"||$_smarty_tpl->tpl_vars['section']->value=="capacitadores"||$_smarty_tpl->tpl_vars['section']->value=="talleres"||$_smarty_tpl->tpl_vars['section']->value=="certificados"||$_smarty_tpl->tpl_vars['section']->value=="admin"||$_smarty_tpl->tpl_vars['section']->value=="perfil") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="login") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="logout") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("login/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("desarrollo_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
