<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-11 14:32:07
         compiled from ".\templates\login\lost_password.html" */ ?>
<?php /*%%SmartyHeaderCode:1020156e23cd35e4443-93901960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bd0d54d7641958350a632c97335e3868e686d5f' => 
    array (
      0 => '.\\templates\\login\\lost_password.html',
      1 => 1457716267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020156e23cd35e4443-93901960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e23cd3610bd9_03688821',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e23cd3610bd9_03688821')) {function content_56e23cd3610bd9_03688821($_smarty_tpl) {?><!DOCTYPE html>
<html >
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
                  if (event.which === 13) {
                    callAjax();
                  }
              });

              $("#lost-pass-button").click(function (event) {
                  callAjax();
              });

              function callAjax(){
                if ($.trim($("#usr").val()) !== "") {
                      /*var passmd5 = $().crypt({
                     method: "md5",
                     source: pass
                     });*/
                     $.ajax({
                             method: "POST",
                             dataType: "json",
                             url: "includes/login/ajax_login.php?funcion=setPass",
                             data: {
                               usr: $("#usr").val(),
                               password: $("#pass").val(),
                             }
                         })
                        .done(function (data, textStatus, jqXHR) {
                            if (data.success) {
                              $("#pass").val(data.newpass)
                            } else {
                              $("#error").html("El usuario no existe");
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
                <h1 id="title">Nueva contraseña</h1>
                <div id="error" style="color: red;font-weight: bold"></div>
                <form class="form">
                    <input type="text" placeholder="Ingrese su nombre de usuario" id="usr" name="usr">
                    <button type="button" class="access" id="lost-pass-button" name="lost-pass-button">Crear nueva contrase&ntilde;a</button>
                    <br /><br />
                    <input type="text" placeholder="Nueva Contrase&ntilde;a" id="pass" name="pass" readonly>
                    <button type="button" class="access" id="login-button" onclick="window.location = 'index.php'">Volver</button>
                    <br /><br />
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
