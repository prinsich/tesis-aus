<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 16:36:14
         compiled from ".\templates\login\acceso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1717156eb072e0993d0-01036332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee1bea2ae38a3adcf5e822d67a50fca9b6e741a0' => 
    array (
      0 => '.\\templates\\login\\acceso.tpl',
      1 => 1457895833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1717156eb072e0993d0-01036332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56eb072e0c1034_33368155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb072e0c1034_33368155')) {function content_56eb072e0c1034_33368155($_smarty_tpl) {?><!DOCTYPE html>
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
 type="text/javascript">
            $(document).ready(function () {
              $('#usr').on('keypress', function (event) {
                  $("#error").html("");
              });

              $('#pass').on('keypress', function (event) {
                  $("#error").html("");
                  if (event.which === 13) {
                    callAjax();
                  }
              });

              $("#login-button").click(function () {
                  callAjax();
              });

              function callAjax(){
                  if ($.trim($("#usr").val()) !== "" && $.trim($("#pass").val()) !== "") {
                        /*var passmd5 = $().crypt({
                       method: "md5",
                       source: pass
                       });*/
                       $.ajax({
                               method: "POST",
                               dataType: "json",
                               url: "includes/login/ajax_login.php?funcion=login",
                               data: {
                                 usr: $("#usr").val(),
                                 password: $("#pass").val(),
                               }
                           })
                          .done(function (data, textStatus, jqXHR) {
                              if (data.success) {
                                $("#error").html("");
                                $('form').fadeOut(500);
                                $('.wrapper').addClass('form-success');
                                setTimeout(function () {
                                    window.location.href = "index.php?section=home";
                                }, 2500);
                              } else {
                                $("#error").html("El usuario o la contrase&ntilde;a son incorrectos");
                                $("#usr").val("");
                                $("#usr").focus();
                                $("#pass").val("")
                              }

                          })
                          .fail(function (jqXHR, textStatus, errorThrown) {
                              if (console && console.log) {
                                  console.log("La solicitud a fallado: " + textStatus);
                                  console.log(jqXHR + " # " + errorThrown);
                              }
                          });
                  } else {
                      $("#error").html("Ingrese el usuario y/o contrase&ntilde;a");
                  }
              }

            });
            <?php echo '</script'; ?>
>
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
                <h1 id="title">Bienvenido a Casa de Francisco</h1>
                <div id="error" style="color: red;font-weight: bold"></div>
                <form class="form" name="formLogin" id="formLogin">
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
    </body>
</html>
<?php }} ?>
