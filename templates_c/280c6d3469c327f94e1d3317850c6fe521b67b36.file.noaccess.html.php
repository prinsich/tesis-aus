<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 14:39:36
         compiled from ".\templates\noaccess.html" */ ?>
<?php /*%%SmartyHeaderCode:2698056e452193b5e80-91992398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280c6d3469c327f94e1d3317850c6fe521b67b36' => 
    array (
      0 => '.\\templates\\noaccess.html',
      1 => 1457804238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2698056e452193b5e80-91992398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e4521962b8e9_66405492',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e4521962b8e9_66405492')) {function content_56e4521962b8e9_66405492($_smarty_tpl) {?><!DOCTYPE html>
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
                                event.preventDefault();
                                $('form').fadeOut(500);
                                $('.wrapper').addClass('form-success');
                                setTimeout(function () {
                                    window.location.href = "index.php";
                                }, 2500);
                              } else {
                                $("#error").html("El usuario o la contrase&ntilde;a son incorrectos");
                                $("#usr").val("");
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
                <h1 id="title">SOLO ADMITE FIREFOX o CHORME</h1>
                <div id="error" style="color: red;font-weight: bold"></div>
                <form class="form">
                    <!--input type="text" placeholder="Usuario" id="usr">
                    <input type="password" placeholder="Contrase&ntilde;a" id="pass">
                    <button type="button" class="access" id="login-button" >Acceder</button>
                    <br /><br />
                    <h4 align="center">
                        <a href="index.php?section=login&sub=lost_password">¿Olvido su contrase&ntilde;a?</a>
                    </h4-->
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
