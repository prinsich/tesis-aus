<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 21:54:22
         compiled from ".\templates\accedo_denegado.html" */ ?>
<?php /*%%SmartyHeaderCode:2233856e4ba1c662030-37115147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46507b729d4c7221b1eee57c2f81935974c408b8' => 
    array (
      0 => '.\\templates\\accedo_denegado.html',
      1 => 1457830461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2233856e4ba1c662030-37115147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e4ba1c66b251_28006538',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e4ba1c66b251_28006538')) {function content_56e4ba1c66b251_28006538($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Casa de Francisco</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/login.css">

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

        <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
            $(document).ready(function () {
              $('#home').click(function(){
                  window.location = 'index.php';
              });
            });
            <?php echo '</script'; ?>
>
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
              <h1 id="title">ACCESO DENEGADO</h1>
              <hr>
              <form class="form">
                <button type="button" class="access" id="home">Volver</button>
              </form>
            </div>

            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </body>
</html>
<?php }} ?>
