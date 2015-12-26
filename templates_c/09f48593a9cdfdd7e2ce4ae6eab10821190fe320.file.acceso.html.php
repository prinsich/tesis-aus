<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 12:58:08
         compiled from ".\templates\login\acceso.html" */ ?>
<?php /*%%SmartyHeaderCode:2191356684f90c1fbc8-62556215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09f48593a9cdfdd7e2ce4ae6eab10821190fe320' => 
    array (
      0 => '.\\templates\\login\\acceso.html',
      1 => 1448909412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2191356684f90c1fbc8-62556215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56684f90c6da10_38895826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56684f90c6da10_38895826')) {function content_56684f90c6da10_38895826($_smarty_tpl) {?><!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Casa de Francisco</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
                <h1 id="title">Bienvenido a Casa de Francisco</h1>
                <div id="error" style="color: red;font-weight: bold"></div>
                <form class="form">
                    <input type="text" placeholder="Usuario" id="usr">
                    <input type="password" placeholder="Contrase&ntilde;a" id="pass">
                    <button type="button" class="access" id="login-button" >Acceder</button>
                    <br /><br />
                    <h4 align="center">
                        <a href="index.php?section=login&sub=lost_password">¿Olvido su contrase&ntilde;a?</a>
                    </h4>
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
        <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src='http://www.itsyndicate.ca/gssi/jquery/jquery.crypt.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }} ?>
