<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 17:49:34
         compiled from ".\templates\login\acceso.html" */ ?>
<?php /*%%SmartyHeaderCode:325905595e3924d08e0-33067016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09f48593a9cdfdd7e2ce4ae6eab10821190fe320' => 
    array (
      0 => '.\\templates\\login\\acceso.html',
      1 => 1435956559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325905595e3924d08e0-33067016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5595e3925467b1_42064692',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5595e3925467b1_42064692')) {function content_5595e3925467b1_42064692($_smarty_tpl) {?><!DOCTYPE html>
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
                <h1 id="title">Bienvenido</h1>
                <div id="error" style="color: red;font-weight: bold"></div>
                <form class="form">
                    <input type="text" placeholder="Usuario" id="usr">
                    <input type="password" placeholder="Contrase&ntilde;a" id="pass">
                    <button type="button" class="access" id="login-button" >Acceder</button>
                    <br /><br />
                    <h4>
                        <a href="index.php?section=login&sub=registro">Registrarse</a>
                        &nbsp;&nbsp;&nbsp;
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
 src="javascript/login.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }} ?>
