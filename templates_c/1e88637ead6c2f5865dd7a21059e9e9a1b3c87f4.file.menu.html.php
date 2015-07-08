<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-28 00:49:16
         compiled from ".\templates\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:7595558e22a8251c25-89086906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e88637ead6c2f5865dd7a21059e9e9a1b3c87f4' => 
    array (
      0 => '.\\templates\\menu.html',
      1 => 1435445354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7595558e22a8251c25-89086906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558e22a8ad66d9_48500528',
  'variables' => 
  array (
    'section' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558e22a8ad66d9_48500528')) {function content_558e22a8ad66d9_48500528($_smarty_tpl) {?><!doctype html>
<html>

    <head>
        <title>Casa de Francisco</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
         
        <!-- ESTILOS CSS -->
        <!--link type="text/css" rel="stylesheet" href="css/reset.css"-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fonts.css">
        
        <!-- SCRIPTS JS & JQUERY -->
        <!--script src="http://code.jquery.com/jquery-latest.js"><?php echo '</script'; ?>
-->
        <?php echo '<script'; ?>
 src="javascript/jquery_ui/js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="javascript/javascript.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="javascript/myJQuery.js"><?php echo '</script'; ?>
>
    </head>

    <body>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
" id="section" />
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
" id="sub" />
        <span class="ir-arriba icon-ctrl"></span>
        <span class="ir-abajo icon-ctrl2"></span>
        <div id="cuerpo">
            <a id="top"></a>
            <div id="tituloPag">

            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("navegacion.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div id="contenido">

                <?php if ($_smarty_tpl->tpl_vars['section']->value==''||$_smarty_tpl->tpl_vars['section']->value=="home") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("home.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="login") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("login/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="alumnos") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("alumnos/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="capacitadores") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("capacitadores/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="talleres") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("talleres/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="certificados") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("certificados/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("desarrollo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>

            </div>

            <div id="piePag">
            </div>

        </div>
    </body>

</html> <?php }} ?>
