<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-10 20:51:56
         compiled from ".\templates\talleres\modificar_taller.html" */ ?>
<?php /*%%SmartyHeaderCode:25059567efd0b656f09-02369639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134b5565366b09b6f0eb72c5f1b00b10c77ad4c9' => 
    array (
      0 => '.\\templates\\talleres\\modificar_taller.html',
      1 => 1457653914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25059567efd0b656f09-02369639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567efd0b9ab583_79794931',
  'variables' => 
  array (
    'id_taller' => 0,
    'usrlogin' => 0,
    'taller' => 0,
    'lista_dias' => 0,
    'lista_alumnos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567efd0b9ab583_79794931')) {function content_567efd0b9ab583_79794931($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_capacitadores')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_capacitadores.php';
?><?php echo '<script'; ?>
 language="javascript" type="text/javascript">
$(document).ready(function () {
    $("#verificar").click(function() {
        if(validar()){
            var checkbox_dias = new Array();
            $('.checkbox_dias').each(function() {
                checkbox_dias.push($(this).is(":checked"));
            });

            $.ajax({
                    method: "POST",
                    dataType: "json",
                    url: "includes/talleres/ajax_talleres.php?funcion=verficar_disponibilidad",
                    data: {
                        accion: "agregar",
                        id_taller: "0",
                        nombre: $("#nombre").val(),
                        id_capacitador: $("#id_capacitador").val(),
                        dias: checkbox_dias
                    }
                })
                .done(function (data, textStatus, jqXHR) {
                    $("#modal_alert").dialog("option", "title", "verificar disponibilida del taller");
                    $("#modal_alert").html(data.msj);
                    $("#modal_alert").dialog("open");
                    if(data.success){
                        $("#guardar").prop( "disabled", false );
                    } else {
                        $("#guardar").prop( "disabled", true );
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

    function validar(){
        var valido = true;
        var error = "Complete lis siguientes campos<br />";

        var nombre = $("#nombre").val();
        if(nombre.trim() === ""){
            valido = false;
            error += " - Nombre<br />";
        }

        var capacitador = $("#id_capacitador").val();
        if(capacitador === "00"){
            valido = false;
            error += " - Capacitador<br />";
        }

        var error_check = false;
        $('.checkbox_dias').each(function() {
            if($(this).is(":checked")){
                error_check = true;
            }
        });

        if(!valido){
            if(!error_check){
                error += " - Selecione al menos un dia<br />";
            }

            $("#modal_alert").dialog("option", "title", "Validacion de los datos del taller");
            $("#modal_alert").html(error);
            $("#modal_alert").dialog("open");

        }
        return valido;
    }

    $("#guardar").click(function (){
        if(validar()){
          $("#formTaller").submit();
        }
    });

    //Salir de la pantalla
    $("#cancelar").click(function () {
        $("#modal_confirm").dialog("option", "title", "Sal&iacute;r del formulario");
        $("#modal_confirm").html("&iquest;Esta seguro que desea sal&iacute;r?");
        $("#modal_confirm").dialog("open");
    });

    //Set botones confirmar
    $("#modal_confirm").dialog("option", "buttons", {
        "SI": function () {
            window.location = "index.php";
        },
        "NO": function () {
            $(this).dialog("close");
        }
    });

    $("#nombre, #id_capacitador, .checkbox_dias").change(function(){
        $("#guardar").prop( "disabled", true );
    });

});
<?php echo '</script'; ?>
>

<h1>Modificar Taller</h1>
<p>Los campos marcado con <b>*</b> son obligatorios</p>

<form autocomplete="off" name="formTaller" id="formTaller" action="index.php?section=talleres&sub=guardar_taller" method="POST">
    <input type="hidden" id="accion" name="accion" value="modificar" />
    <input type="hidden" id="id_taller" name="id_taller" value="<?php echo $_smarty_tpl->tpl_vars['id_taller']->value;?>
" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />

    <label for="nombre">Nombre(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['taller']->value['nombre'];?>
" id="nombre" name="nombre" />
    <br />

    <label for="capacitador">Capacitador(*):</label>
    <?php echo smarty_function_html_capacitadores(array('name'=>"id_capacitador",'seleccionar'=>$_smarty_tpl->tpl_vars['taller']->value['id_capacitador'],'estado'=>"ACTIVO"),$_smarty_tpl);?>

    <br />

    <label for="dias">D&iacute;as de Dictado:</label>
    <br /><br />
    <table class="diascheck" style="width: 35%; float: right; margin-left: 90px; margin-right: 125px; margin-top: 0px; margin-bottom: 20px;">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_dias']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
            <tr>
                <input type="hidden" name="id_dia_taller_<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia_taller'];?>
" />
                <?php if ($_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_taller']==$_smarty_tpl->tpl_vars['id_taller']->value) {?>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dia'];?>
</td>
                    <td><input class="checkbox_dias" type="checkbox" id="dia_<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" name="days_list[]" value="<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" checked ></td>
                <?php } else { ?>
                    <td><?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dia'];?>
</td>
                    <td><input class="checkbox_dias" type="checkbox" id="dia_<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" name="days_list[]" value="<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" ></td>
                <?php }?>
            </tr>
        <?php endfor; endif; ?>
    </table>
    <br />
    <?php if ($_smarty_tpl->tpl_vars['lista_alumnos']->value!=null) {?>
    <h2>Listado de Alumnos que asisten al taller</h2>
    <p>Selecione los alumnos que desea eliminar del curso</p>
    <table style="width: 50%; border: none; padding-left: 10%;" >
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_alumnos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
        <tr>
            <td><input type="checkbox" name="alumnos[]" value="<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
"></td>
            <td style="text-align: left;">&DoubleRightArrow; <?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['nombre'];?>
</td>
            <?php endfor; endif; ?>
        </tr>
    </table>
    <br />
    <?php }?>
    <div style="text-align: center">
      <button class="btnSubmit2" type="button" name="verificar" id="verificar" >Verficar Disponibilidad</button>
      <button class="btnSubmit2" type="button" name="guardar" id="guardar" >Guardar</button>
      <button class="btnSubmit2" type="button" name="cancelar" id="cancelar" >Cancelar</button>
    </div>
</form>
<?php }} ?>
