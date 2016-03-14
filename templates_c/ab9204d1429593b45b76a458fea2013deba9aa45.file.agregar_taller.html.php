<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:17:31
         compiled from ".\templates\talleres\agregar_taller.html" */ ?>
<?php /*%%SmartyHeaderCode:2547356e0e20431cfe6-58268049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9204d1429593b45b76a458fea2013deba9aa45' => 
    array (
      0 => '.\\templates\\talleres\\agregar_taller.html',
      1 => 1457928309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2547356e0e20431cfe6-58268049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e0e2043f8e04_27283646',
  'variables' => 
  array (
    'usrlogin' => 0,
    'lista_dias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0e2043f8e04_27283646')) {function content_56e0e2043f8e04_27283646($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_capacitadores')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_capacitadores.php';
?><?php echo '<script'; ?>
 type="text/javascript">
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
                    $("#modal_alert").dialog("option", "title", "Verificar disponibilida del taller");
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

        var checkbox = 0;
        var checked = 0;
        $('.checkbox_dias').each(function() {
            checkbox++;
            if(!$(this).is(":checked")){
                checked++;
            }
        });
        if(checkbox == checked){
            valido = false;
            error += " - Selecione al menos un dia<br />";
        }

        if(!valido){
            $("#modal_alert").dialog("option", "title", "Validacion de los datos del taller");
            $("#modal_alert").html(error);
            $("#modal_alert").dialog("open");
        }
        return valido;
    }

    $("#guardar").click(function (){
        if(validar()){
          $("#formAgregarTaller").submit();
        }
    });

    //Salir de la pantalla
    $("#cancelar").click(function () {
        $("#modal_confirm").dialog("option", "title", "Sal\u00edr");
        $("#modal_confirm").html("&iquest;Esta seguro que desea sal&iacute;r?");
        $("#modal_confirm").dialog("open");
    });

    //Set botones confirmar
    $("#modal_confirm").dialog("option", "buttons", {
        "SI": function () {
            window.location = "index.php?section=talleres&sub=listar_talleres";
        },
        "NO": function () {
            $(this).dialog("close");
        }
    });
});
<?php echo '</script'; ?>
>

<h1>Agregar Taller</h1>
<p>Los campos marcado con <b>*</b> son obligatorios</p>
<form autocomplete="off" id="formAgregarTaller" name="formAgregarTaller" action="index.php?section=talleres&sub=guardar_taller" method="POST">
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />

    <label for="nombre">Nombre(*):</label>
    <input type="text" value="" id="nombre" name="nombre" class="letras"  />
    <br />

    <label for="capacitador">Capacitador(*):</label>
    <?php echo smarty_function_html_capacitadores(array('name'=>"id_capacitador",'estado'=>"ACTIVO"),$_smarty_tpl);?>

    <br />

    <label for="dias">D&iacute;as de Dictado:</label>
    <br /><br />
    <table class="diascheck" style="width: 20%; float: right; margin-left: 90px; margin-right: 125px; margin-top: 0px; margin-bottom: 20px; ">
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
            <td style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dia'];?>
</td>
            <td><input class="checkbox_dias" type="checkbox" id="dia_<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" name="days_list[]" value="<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
"></td>
        </tr>
        <?php endfor; endif; ?>
    </table>

    <br /><br /><br /><br /><br /><br /><br /><br /><br />

    <div style="text-align: center">
      <button class="multipleBtnSubmit" type="button" name="verificar" id="verificar" >Verficar Disponibilidad</button>
      <button class="multipleBtnSubmit" type="button" name="guardar" id="guardar" disabled >Guardar</button>
      <button class="multipleBtnSubmit" type="button" name="cancelar" id="cancelar" >Cancelar</button>
    </div>
</form>
<?php }} ?>
