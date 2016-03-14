<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:18:46
         compiled from ".\templates\talleres\buscar_talleres.html" */ ?>
<?php /*%%SmartyHeaderCode:3236256e1b5849c6a82-71577037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a8d77434edd670aa91baea9dee4df899ecdc28' => 
    array (
      0 => '.\\templates\\talleres\\buscar_talleres.html',
      1 => 1457895833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3236256e1b5849c6a82-71577037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e1b584a1a0f2_24501728',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1b584a1a0f2_24501728')) {function content_56e1b584a1a0f2_24501728($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_capacitadores')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_capacitadores.php';
?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
      $("#buscar").click(function (){
          $.ajax({
                  method: "POST",
                  dataType: "json",
                  url: "includes/talleres/ajax_talleres.php?funcion=buscar_talleres",
                  data: {
                      nombre: $("#nombre").val(),
                      id_capacitador: $("#id_capacitador").val(),
                      estado: $("#estado").val(),
                  }
              })
                      .done(function (data, textStatus, jqXHR) {
                          if (data.success) {
                              $("#formBuscarTaller").submit();
                          } else {
                              $("#modal_alert").dialog("option", "title", "busquedar taller");
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

<h1>Buscar Taller</h1>
<form autocomplete="off" name="formBuscarTaller" id="formBuscarTaller" action="index.php?section=talleres&sub=listar_talleres" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" value="" name="nombre" id="nombre" class="letras"/>
    </br>

    <label for="capacitador">Capacitador:</label>
    <?php echo smarty_function_html_capacitadores(array('name'=>"id_capacitador",'estado'=>"ALL"),$_smarty_tpl);?>

    </br>

    <label for="dni">Estado:</label>
    <select id="estado" name="estado">
        <option value=""> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
    </select>
    <br />

    <button class="btnSubmit" type="button" id="buscar" name="buscar">Buscar</button>
</form>
<?php }} ?>
