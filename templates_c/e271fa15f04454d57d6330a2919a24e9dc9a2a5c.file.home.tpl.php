<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 16:36:22
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238456eb0736cc1723-62925424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e271fa15f04454d57d6330a2919a24e9dc9a2a5c' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1458243345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238456eb0736cc1723-62925424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
    'sub' => 0,
    'usrperfil' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56eb0736de7ab1_53821408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb0736de7ab1_53821408')) {function content_56eb0736de7ab1_53821408($_smarty_tpl) {?><!doctype html>
<html>

    <head>
        <title>Casa de Francisco</title>
        <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- ESTILOS CSS -->
        <!--link type="text/css" rel="stylesheet" href="css/reset.css"-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/fonts.css">
        <link type="text/css" rel="stylesheet" href="css/tabs.css">

        <!-- LIBRERIAS DE JQUERY -->
        <?php echo '<script'; ?>
 src="js/jquery-2.1.4.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery-validate.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery-ui/jquery-ui.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery-ui/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- ESTILOS DE JQUERY -->
        <link href="js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery-ui/jquery-ui.structure.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery-ui/jquery-ui.theme.css" rel="stylesheet" type="text/css"/>

        <!-- MY SCRIPTS JS -->
        <?php echo '<script'; ?>
 src="js/jquery.maskedinput.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/auxiliar_function.js" type="text/javascript"><?php echo '</script'; ?>
>

    </head>

    <body>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
" id="section" />
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
" id="sub" />
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usrperfil']->value;?>
" id="usrperfil" />
        <div id="cuerpo">
            <a id="top"></a>
            <div id="tituloPag">

            </div>

            <?php if ($_smarty_tpl->tpl_vars['section']->value=="admin"&&$_smarty_tpl->tpl_vars['usrperfil']->value=="ADMIN") {?>
                <?php echo $_smarty_tpl->getSubTemplate ("navegacion_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("navegacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <div id="contenido">

                <?php if ($_smarty_tpl->tpl_vars['section']->value=="home") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("intro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="login") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="alumnos") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("alumnos/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="capacitadores") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("capacitadores/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="talleres") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("talleres/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="certificados") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("certificados/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="perfil") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("perfil/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="admin") {?>
                    <?php if ($_smarty_tpl->tpl_vars['usrperfil']->value=="ADMIN") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("admin/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <?php echo '<script'; ?>
>window.location="index.php";<?php echo '</script'; ?>
>
                    <?php }?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("accedo_denegado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>

            </div>

            <div id="piePag">
            </div>

        </div>

        <div id="modal_alert" title="Alert">
            <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
        </div>

        <div id="modal_confirm" title="Confirm" data-id="aidioas">
            <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
        </div>

    </body>

</html>
<?php }} ?>
