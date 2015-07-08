<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 00:44:20
         compiled from ".\templates\login\lost_password.html" */ ?>
<?php /*%%SmartyHeaderCode:17074559604bc0ac962-50618553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bd0d54d7641958350a632c97335e3868e686d5f' => 
    array (
      0 => '.\\templates\\login\\lost_password.html',
      1 => 1435895058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17074559604bc0ac962-50618553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559604bc0cf687_37819420',
  'variables' => 
  array (
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559604bc0cf687_37819420')) {function content_559604bc0cf687_37819420($_smarty_tpl) {?><!doctype html>
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

                <p>Ingrese su nombre de usuario y recibira un mail donde le indicara los pasos para recumerar la contrase&ntilde;a</p>
                <form autocomplete="off" name="formCapacitador" action="index.php?section=admin&sub=guardar_usuario" method="POST">
                    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
                    
                    <label for="user">Nombre de usuario:</label>
                    <input type="text" value="" id="user" name="user" />
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
