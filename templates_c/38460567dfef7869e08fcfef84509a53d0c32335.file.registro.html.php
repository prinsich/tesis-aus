<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 01:10:34
         compiled from ".\templates\login\registro.html" */ ?>
<?php /*%%SmartyHeaderCode:103515595f74c953655-76061077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38460567dfef7869e08fcfef84509a53d0c32335' => 
    array (
      0 => '.\\templates\\login\\registro.html',
      1 => 1435895133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103515595f74c953655-76061077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5595f74ca510e8_33951265',
  'variables' => 
  array (
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5595f74ca510e8_33951265')) {function content_5595f74ca510e8_33951265($_smarty_tpl) {?><!doctype html>
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
        <div id="cuerpo">
            <a id="top"></a>
            <div id="tituloPag">
            </div>

            <div id="navegacion">
                <ul></ul>
            </div>
            <div id="contenido">
                <h1>REGISTRO</h1>

                <p> Recuerde que para poder registrase su nombre de usuario debio ser dado de alta por el administrador</p>
                <form autocomplete="off" name="formCapacitador" action="index.php?section=admin&sub=guardar_usuario" method="POST">
                    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
                    
                    <label for="user">Nombre de usuario:</label>
                    <input type="text" value="" id="user" name="user" />
                    <br />
                    
                    <label for="pass1">Contrase&ntilde;a:</label>
                    <input type="password" value="" id="pass1" name="pass1" />
                    <br />
                    
                    <label for="pass2">Repita la contrase&ntilde;a:</label>
                    <input type="password" value="" id="pass2" name="pass2" />
                    <br />

                    <div align="center">
                        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
                        <input class="btnSubmit2" type="button" name="volver" value="Volver" onclick="history.back();">
                    </div>
                </form>
            </div>
            <div id="piePag">
            </div>

        </div>
    </body>

</html> <?php }} ?>
