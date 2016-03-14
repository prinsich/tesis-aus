<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-13 15:56:34
         compiled from ".\templates\perfil\ver_perfil.html" */ ?>
<?php /*%%SmartyHeaderCode:1086356e22d84ab4e04-70966907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c689d46261319a7a175fcafd0927a4ae47cf939b' => 
    array (
      0 => '.\\templates\\perfil\\ver_perfil.html',
      1 => 1457895391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1086356e22d84ab4e04-70966907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e22d84b0a546_40975602',
  'variables' => 
  array (
    'dato_usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e22d84b0a546_40975602')) {function content_56e22d84b0a546_40975602($_smarty_tpl) {?><?php echo '<script'; ?>
 language="javascript" type="text/javascript">
$(document).ready(function () {
    $("#newpass").click(function (){
        var usr = $("#user").val();
        var pass1 = $("#pass1").val();
        var pass2 = $("#pass2").val();
        var valida = true;
        $("#modal_alert").dialog("option", "title", "Cambio de Contraseña");

        //password sin espacios
        var espacios = false;
        var cont = 0;

        while (!espacios && (cont < pass1.length)) {
            if (pass1.charAt(cont) == " ")
            espacios = true;
            cont++;
        }

        if (espacios) {
            $("#modal_alert").html("La contraseña no puede contener espacios en blanco");
            $("#modal_alert").dialog("open");
            valida = false;
        }

        //password con mas de 8 caracteres
        if (pass1.length < 8 || pass2.length < 8) {
            $("#modal_alert").html("Los campos de la password deben tener mas de 8 caracteres");
            $("#modal_alert").dialog("open");
            valida = false;
        }

        //password iguales
        if (pass1 != pass2) {
            $("#modal_alert").html("Las passwords deben de coincidir");
            $("#modal_alert").dialog("open");
            valida = false;
        }

        if(valida){
            $.ajax({
                method: "POST",
                dataType: "json",
                url: "includes/perfil/ajax_perfil.php?funcion=newPassword",
                data: {
                    username: $("#user").val(),
                    password: $("#pass1").val(),
                }
            })
            .done(function (data, textStatus, jqXHR) {
                $("#modal_alert").html("La contraseña fue cambiada con exito");
                $("#modal_alert").dialog("open");
                $("#pass1").val("");
                $("#pass2").val("");
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    console.log("La solicitud a fallado: " + textStatus);
                    console.log(jqXHR + " # " + errorThrown);
                }
            });
        }
    });

    $("#volver").click(function(){
        window.location="index.php?section=home";
    })
});
<?php echo '</script'; ?>
>

<style>
td { /*border: none;*/ text-align: left; /*width: 10%;*/}
</style>
<h1>Mis Datos</h1>

<h2>Datos de Login</h2>
<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Usuario</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombreusr'];?>
</b></td>
        <input type="hidden" id="user" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombreusr'];?>
"/>
    </tr>
    <tr>
        <td>Perfil:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['perfil'];?>
</b></td>
    </tr>
</table>

<h2>Datos Personales</h2>
<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Apellido:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['apellido'];?>
</b></td>
    </tr>
    <tr>
        <td>Nombres:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombre'];?>
</b></td>
    </tr>
    <tr>
        <td>Domicilio:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['domicilio'];?>
</b></td>
    </tr>
    <tr>
        <td>Tel&eacute;fono:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['telefono'];?>
</b></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['email'];?>
</b></td>
    </tr>
</table>

<h2>Nueva Contrase&ntilde;a</h2>
<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Nueva Contrase&ntilde;a</td>
        <td><input type="password" value="" id="pass1" name="pass1"/></td>
    </tr>
    <tr>
        <td>Repita Contrase&ntilde;a</td>
        <td><input type="password" value="" id="pass2" name="pass2"/></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center">
            <button class="multipleBtnSubmit" type="button" name="newpass" id="newpass" >Crear nueva contrase&ntilde;a</button>
        </td>
    </tr>
</table>

<button class="btnSubmit" type="button" name="volver" id="volver">Volver</button>
<?php }} ?>
