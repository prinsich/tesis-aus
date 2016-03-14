<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:27:53
         compiled from ".\templates\admin\agregar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:056e2ffb0c66d72-34752955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27cee7505766d384ae9a26ec2099667d57e8fecd' => 
    array (
      0 => '.\\templates\\admin\\agregar_usuario.html',
      1 => 1457929664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '056e2ffb0c66d72-34752955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e2ffb0d54461_53506864',
  'variables' => 
  array (
    'usrlogin' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e2ffb0d54461_53506864')) {function content_56e2ffb0d54461_53506864($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_perfiles')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_perfiles.php';
?><?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function () {
    //Salir de la pantalla
    $("#cancelar").click(function () {
        $("#modal_confirm").dialog("option", "title", "Sal\u00edr");
        $("#modal_confirm").html("&iquest;Esta seguro que desea sal&iacute;r?");
        $("#modal_confirm").dialog("open");
    });

    //Set botones confirmar
    $("#modal_confirm").dialog("option", "buttons", {
        "SI": function () {
            window.location = "index.php?section=admin&sub=listar_usuarios";
        },
        "NO": function () {
            $(this).dialog("close");
        }
    });

    $("#guardar").click(function() {
        if(validar()){
            $("#formAgregarUsuario").submit();
        }
    });

    function validar() {
        var valido = true;
        var error = "Por favor complete los siguiente campos: <br />";

        var usr = $("#user").val();
        if (usr.trim() === "") {
            valido = false;
            error += " - DNI para el nombre de usuario<br />";
        }

        var perfil = $("#perfil").val();
        if (perfil === "00") {
            valido = false;
            error += " - Selecione un perfil<br />";
        }

        var apellido = $("#apellido").val();
        if (apellido.trim() === "") {
            valido = false;
            error += " - Apellido<br />";
        }

        var nombre = $("#nombre").val();
        if (nombre.trim() === "") {
            valido = false;
            error += " - Nombre<br />";
        }

        var domicilio = $("#domicilio").val();
        if (domicilio.trim() === "") {
            valido = false;
            error += " - Domicilio<br />";
        }

        var telefono = $("#telefono").val();
        if (telefono.trim() === "") {
            valido = false;
            error += " - Telefono y/o celular<br />";
        }

        var email = $("#email").val();
        if (email.trim() === "") {
            valido = false;
            error += " - Email<br />";
        }

        if(valido){
            return true;
        } else {
            $("#modal_alert").dialog("option", "title", "Guardar usuario");
            $("#modal_alert").html(error);
            $("#modal_alert").dialog("open");
            return false;
        }
    }

    $("#email").change(function() {
        var email = $(this).val();
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email.trim() !== ""){
            if ( !expr.test(email) ){
                $("#modal_alert").dialog("option", "title", "Email");
                $("#modal_alert").html("La direccion de correo " + email + " es incorrecta.");
                $("#modal_alert").dialog("open");
                $(this).val("");
            }
        }
    });

    $("#user").change(function() {
        if($.trim($(this).val()) !== ""){
            $.ajax({
                method: "POST",
                dataType: "json",
                url: "includes/admin/ajax_admin.php?funcion=buscar_nombre_usr",
                data: {
                    user: $(this).val(),
                }
            })
            .done(function (data, textStatus, jqXHR) {
                if (data.success) {
                    $("#modal_alert").dialog("option", "title", "Busquedar alumno");
                    $("#modal_alert").html("El usuario ya existe");
                    $("#modal_alert").dialog("open");
                    $("#user").val("");
                }

            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    console.log("La solicitud a fallado: " + textStatus);
                    console.log(jqXHR + " # " + errorThrown);
                }
            });
        }
    });
});

<?php echo '</script'; ?>
>

<h1>Agregar Usuario</h1>

<form autocomplete="off" name="formAgregarUsuario" id="formAgregarUsuario" action="index.php?section=admin&sub=guardar_usuario" method="POST">
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
    <input type="hidden" id="new_pass" name="new_pass" value="SI" />

    <h2>Datos de login</h2>
    <label for="user">Nombre de usuario:(dni de la persona)</label>
    <input type="text" value="" id="user" name="user" />
    <br />
    <label></label>
    <br />
    <label for="password">Contrase&ntilde;a temporal:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" id="password" name="password" readonly=""/>
    <br />

    <label for="perfil">Perfil:</label>
    <?php echo smarty_function_html_perfiles(array('name'=>"perfil"),$_smarty_tpl);?>

    <br />

    <h2>Datos Personales</h2>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"  />
    <br />

    <label for="nombre">Nombres:</label>
    <input type="text" id="nombre" name="nombre"  />
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" id="domicilio" name="domicilio"  />
    <br />

    <label for="telefono">Tel&eacute;fono de contacto:</label>
    <input type="text" id="telefono" name="telefono" class="numeros" maxlength="15"/>
    <br />

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" />
    <br />

    <div align="center">
        <button class="multipleBtnSubmit" type="button" name="guardar" id="guardar">Guardar</button>
        <button class="multipleBtnSubmit" type="button" name="cancelar" id="cancelar">Cancelar</button>
    </div>
</form>
<?php }} ?>
