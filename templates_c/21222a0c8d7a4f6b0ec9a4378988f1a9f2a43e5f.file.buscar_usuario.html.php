<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 10:07:48
         compiled from ".\templates\admin\buscar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:1384056e461881018a4-09272887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21222a0c8d7a4f6b0ec9a4378988f1a9f2a43e5f' => 
    array (
      0 => '.\\templates\\admin\\buscar_usuario.html',
      1 => 1457895833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1384056e461881018a4-09272887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e461882758b1_95378387',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e461882758b1_95378387')) {function content_56e461882758b1_95378387($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $("#buscar").click(function (){
            $.ajax({
                    method: "POST",
                    dataType: "json",
                    url: "includes/admin/ajax_admin.php?funcion=buscar_usuarios",
                    data: {
                        nombre: $("#nombre").val(),
                        apellido: $("#apellido").val(),
                        dni: $("#dni").val(),
                        estado: $("#estado").val(),
                    }
                })
                        .done(function (data, textStatus, jqXHR) {
                            if (data.success) {
                                $("#formBuscarUsuarios").submit();
                            } else {
                                $("#modal_alert").dialog("option", "title", "Busquedar de usuario");
                                $("#modal_alert").html("No existe coincidencia con los datos ingresados<br/>Pruebe nuevamente");
                                $("#modal_alert").dialog("open");
                            }

                        })
                        .fail(function (jqXHR, textStatus, errorThrown) {
                            if (console && console.log) {
                                console.log("La solicitud a fallado: " + textStatus);
                                console.log(jqXHR + " # " + errorThrown);
                            }
                        });


        });
    });
<?php echo '</script'; ?>
>

<h1>Buscar Capacitadores</h1>
<p>
    Complete los datos para poder filtar la busqueda<br />
    Si deja el formulario en blanco visualizara la totalidad de los usuarios
</p>
<form autocomplete="off" name="formBuscarUsuarios" id="formBuscarUsuarios" action="index.php?section=admin&sub=listar_usuarios" method="POST">
    <label for="apellido">Apellido:</label>
    <input type="text" value="" name="apellido" class="letras" id="apellido"/>
    <br />

    <label for="nombre">Nombres:</label>
    <input type="text" value="" name="nombre" class="letras" id="nombre"/>
    <br />

    <label for="dni">DNI:</label>
    <input type="text" value="" name="dni" class="numeros" maxlength="8" id="dni"/>
    <br />

    <label for="dni">Estado:</label>
    <select id="estado" name="estado">
        <option value=""> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
    </select>
    <br />

    <button class="btnSubmit" type="button" id="buscar" name="buscar" >Buscar</button>
</form>
<?php }} ?>
