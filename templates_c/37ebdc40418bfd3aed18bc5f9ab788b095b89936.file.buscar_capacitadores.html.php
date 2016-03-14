<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:18:17
         compiled from ".\templates\capacitadores\buscar_capacitadores.html" */ ?>
<?php /*%%SmartyHeaderCode:2135256e0e04f85cad6-88311141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ebdc40418bfd3aed18bc5f9ab788b095b89936' => 
    array (
      0 => '.\\templates\\capacitadores\\buscar_capacitadores.html',
      1 => 1457895833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2135256e0e04f85cad6-88311141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e0e04f8996e2_13165751',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0e04f8996e2_13165751')) {function content_56e0e04f8996e2_13165751($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
      $("#buscar").click(function (){
          $.ajax({
                  method: "POST",
                  dataType: "json",
                  url: "includes/capacitadores/ajax_capacitadores.php?funcion=buscar_capacitadores",
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
                              $("#formBuscarCapacitador").submit();
                          } else {
                              $("#modal_alert").dialog("option", "title", "busquedar Capacitador");
                              $("#modal_alert").html("No existe coincidencia con los datos ingresados<br />Pruebe nuevamente");
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
    Si deja el formulario en blanco visualizara la totalidad de los capacitores
</p>
<form autocomplete="off" name="formBuscarCapacitador" id="formBuscarCapacitador" action="index.php?section=capacitadores&sub=listar_capacitadores" method="POST">
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

    <button class="btnSubmit" type="button" name="buscar" id="buscar" >Buscar</button>
</form>
<?php }} ?>
