<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-06 09:40:23
         compiled from ".\templates\alumnos\buscar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:7704577cfc3794acc0-44595237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aef2b827e67454a63ddc5c1897c6a0714af21f7c' => 
    array (
      0 => '.\\templates\\alumnos\\buscar_alumno.html',
      1 => 1467766358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7704577cfc3794acc0-44595237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577cfc379b6af5_51156357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfc379b6af5_51156357')) {function content_577cfc379b6af5_51156357($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_talleres.php';
?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $("#buscar").click(function (){
            $.ajax({
                    method: "POST",
                    dataType: "json",
                    url: "includes/alumnos/ajax_alumno.php?funcion=buscar_alumnos",
                    data: {
                        nombre: $("#nombre").val(),
                        apellido: $("#apellido").val(),
                        dni: $("#dni").val(),
                        id_taller: $("#taller").val(),
                        alta_seguro: $("#alta_seguro").val(),
                        estado: $("#estado").val(),
                    }
                })
                        .done(function (data, textStatus, jqXHR) {
                            if (data.success) {
                                $("#formBuscarAlumno").submit();
                            } else {
                                $("#modal_alert").dialog("option", "title", "Buscar alumno");
                                $("#modal_alert").html("No existe coincidencia con los datos ingresados. Pruebe nuevamente");
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

<h1>Buscar Alumno</h1>
<p>
    Complete los datos para poder filtar la busqueda<br />
    Si deja el formulario en blanco visualizara la totalidad de los alumnos
</p>

<form autocomplete="off" id="formBuscarAlumno" name="formBuscarAlumno" action="index.php?section=alumnos&sub=listar_alumnos" method="POST">
    <label for="apellido">Apellido:</label>
    <input type="text" value="" name="apellido" class="letras" id="apellido"/>
    <br />

    <label for="nombre">Nombres:</label>
    <input type="text" value="" name="nombre" class="letras" id="nombre"/>
    <br />

    <label for="dni">DNI:</label>
    <input type="text" value="" name="dni" id="dni" class="numeros" maxlength="8"/>
    <br />

    <label for="taller">Taller:</label>
    <?php echo smarty_function_html_talleres(array('name'=>"taller",'estado'=>"ACTIVO"),$_smarty_tpl);?>

    <br />

    <label for="alta_seguro">Alta Seguro:</label>
    <select name="alta_seguro" id="alta_seguro">
        <option value="" selected="selected">&nbsp;</option>
        <option value="SI">Si</option>
        <option value="NO">No</option>
    </select>
    <br />

    <label for="estado">Estado:</label>
    <select id="estado" name="estado">
        <option value="" selected="selected"> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
    </select>
    <br />

    <button class="btnSubmit" type="button" id="buscar" name="buscar" />Buscar</button>
</form>
<?php }} ?>
