<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:36:14
         compiled from ".\templates\admin\ver_registro.html" */ ?>
<?php /*%%SmartyHeaderCode:845956e2ff4cf3e062-02888961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7df6dc2cfda0a8ab4854d9e7a5100941c447cc' => 
    array (
      0 => '.\\templates\\admin\\ver_registro.html',
      1 => 1457895833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845956e2ff4cf3e062-02888961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e2ff4d0ee772_06207395',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e2ff4d0ee772_06207395')) {function content_56e2ff4d0ee772_06207395($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_log_usr')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_log_usr.php';
if (!is_callable('smarty_function_html_log_accion')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_log_accion.php';
if (!is_callable('smarty_function_html_log_clase')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_log_clase.php';
?><?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function () {

    $("#desde").datepicker({
        changeMonth: true,
        changeYear: true
    });

    $("#hasta").datepicker({
        changeMonth: true,
        changeYear: true
    });

    $("#buscar").click(function(){
        $("#hidden_desde").val($("#desde").val());
        $("#hidden_hasta").val($("#hasta").val());
        $("#hidden_usr").val($("#usr").val());
        $("#hidden_accion").val($("#accion").val());
        $("#hidden_clase").val($("#clase").val());
        $.ajax({
            method: "POST",
            dataType: "json",
            url: "includes/admin/ajax_admin.php?funcion=ver_registro",
            data: {
                desde: $("#desde").val(),
                hasta: $("#hasta").val(),
                usr: $("#usr").val(),
                accion: $("#accion").val(),
                clase: $("#clase").val(),
            }
        })
        .done(function (data, textStatus, jqXHR) {
            if (data.success) {
                $("#capa_datos").html(data.html);
                $("#divPrintLog").css('display', 'inline');
            } else {
                $("#modal_alert").html("Sin resultados");
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                console.log("La solicitud a fallado: " + textStatus);
                console.log(jqXHR + " # " + errorThrown);
            }
        });
    });

    $("#print").click(function(){
        $("#formPrintLog").submit();
    });

});
<?php echo '</script'; ?>
>

<h1>Log de Acciones</h1>
<p>Acciones realizadas por los usuarios del sistemas</p>
<hr />
<p>Filtros</p>
<p>
    Desde: <input type="text" value="" id="desde" name="desde" style="width: 100px" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Hasta: <input type="text" value="" id="hasta" name="hasta" style="width: 100px" />
</p>

<p>
    Usuario:
    <?php echo smarty_function_html_log_usr(array('name'=>"usr",'style'=>"width: 130px;"),$_smarty_tpl);?>


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    Acci&oacute;n:
    <?php echo smarty_function_html_log_accion(array('name'=>"accion",'style'=>"width: 130px;"),$_smarty_tpl);?>


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    Clase:
    <?php echo smarty_function_html_log_clase(array('name'=>"clase",'style'=>"width: 130px;"),$_smarty_tpl);?>

</p>

<Button type="button" class="btnSubmit" id="buscar" name="buscar" >Buscar</button>
    <hr />
    <div id="capa_datos"></div>

    <div id="divPrintLog" style="display: none">
        <form autocomplete="off" id="formPrintLog" action="index.php?section=admin&sub=print_log" method="POST" >
            <input type="hidden" value="" id="hidden_desde" name="hidden_desde" />
            <input type="hidden" value="" id="hidden_hasta" name="hidden_hasta" />
            <input type="hidden" value="" id="hidden_usr" name="hidden_usr" />
            <input type="hidden" value="" id="hidden_accion" name="hidden_accion" />
            <input type="hidden" value="" id="hidden_clase" name="hidden_clase" />
            <button type="button" class="btnSubmit" id="print" name="print" >Imprimir</button>
        </form>
    </div>
<?php }} ?>
