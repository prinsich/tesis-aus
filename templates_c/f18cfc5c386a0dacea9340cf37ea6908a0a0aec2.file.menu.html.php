<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 12:58:18
         compiled from ".\templates\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:2714056684f9aab0f04-51738878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f18cfc5c386a0dacea9340cf37ea6908a0a0aec2' => 
    array (
      0 => '.\\templates\\menu.html',
      1 => 1448918450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2714056684f9aab0f04-51738878',
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
  'unifunc' => 'content_56684f9ae219e0_28519230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56684f9ae219e0_28519230')) {function content_56684f9ae219e0_28519230($_smarty_tpl) {?><!doctype html>
<html>

    <head>
        <title>Casa de Francisco</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        
        <!-- ESTILOS CSS -->
        <!--link type="text/css" rel="stylesheet" href="css/reset.css"-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fonts.css">
        
        <!-- LIBRERIAS DE JQUERY -->
        <?php echo '<script'; ?>
 src="js/jquery-2.1.4.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery-validate.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!--script src="js/jquery-validate.min.js" type="text/javascript"><?php echo '</script'; ?>
-->
        
        <?php echo '<script'; ?>
 src="js/jquery-ui/jquery-ui.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link href="js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css"/>

        <?php echo '<script'; ?>
 src="js/jquery-ui/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!--link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/-->

        <link href="js/jquery-ui/jquery-ui.structure.css" rel="stylesheet" type="text/css"/>
        <!--link href="js/jquery-ui/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/-->

        <link href="js/jquery-ui/jquery-ui.theme.css" rel="stylesheet" type="text/css"/>
        <!--link href="js/jquery-ui/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/-->
        
        <!-- MY SCRIPTS JS -->
        <?php echo '<script'; ?>
 src="js/javascript.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/myJQuery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery.maskedinput.js" type="text/javascript"><?php echo '</script'; ?>
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
            
            <?php if ($_smarty_tpl->tpl_vars['section']->value=="admin"&&$_smarty_tpl->tpl_vars['usrperfil']->value=="admin") {?>
                <?php echo $_smarty_tpl->getSubTemplate ("navegacion_admin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("navegacion.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>    
            
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

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="perfil") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("perfil/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="admin") {?>
                    <?php if ($_smarty_tpl->tpl_vars['usrperfil']->value=="Admin") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("admin/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <h1 style="text-align: center">ACCESO DENEGADO</h1> 
                    <?php }?>
                <?php } else { ?>
                    <h1 style="text-align: center">EN DESARROLLO</h1> 
                <?php }?>

            </div>

            <div id="piePag">
            </div>

        </div>
    </body>

</html> <?php }} ?>
