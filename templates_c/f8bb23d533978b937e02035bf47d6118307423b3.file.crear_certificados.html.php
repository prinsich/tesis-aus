<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-11 00:29:20
         compiled from ".\templates\certificados\crear_certificados.html" */ ?>
<?php /*%%SmartyHeaderCode:20407567f09b32f9472-21705566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8bb23d533978b937e02035bf47d6118307423b3' => 
    array (
      0 => '.\\templates\\certificados\\crear_certificados.html',
      1 => 1457666949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20407567f09b32f9472-21705566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567f09b33c12b1_36797792',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f09b33c12b1_36797792')) {function content_567f09b33c12b1_36797792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_talleres.php';
?><?php echo '<script'; ?>
 language="javascript" type="text/javascript">
$(document).ready(function () {
  $("#buscar").click(function (){
    if($("#taller").val() == 0){
      $("#modal_alert").dialog("option", "title", "Buscar alumnos");
      $("#modal_alert").html("Seleccione un taller");
      $("#modal_alert").dialog("open");
    } else {
      $.ajax({
        method: "POST",
        dataType: "json",
        url: "includes/certificados/ajax_certificados.php?funcion=buscar_alumnos",
        data: {
          id_taller: $("#taller").val(),
        }
      })
      .done(function (data, textStatus, jqXHR) {
        $("#capa_datos").html(data.html);
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        if (console && console.log) {
          console.log("La solicitud a fallado: " + textStatus);
          console.log(jqXHR + " # " + errorThrown);
        }
      });
    }
  });

  $(".crear_certificado_pdf").click(function () {
    alert("ooansdosandoasn");
    //var urlp = "index.php?section=certificados&sub=imprimir&id_alumno=" + $(this).data("id") + "&id_taller=" + $("#taller").val() + "&estado=" + $("#estado_" + $(this).data("id")).val();
    //window.open(urlp, "_self");
  });

});
<?php echo '</script'; ?>
>

<h1>Certificados</h1>

<p><?php echo smarty_function_html_talleres(array('name'=>"taller",'estado'=>"ACTIVO"),$_smarty_tpl);?>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="images/icons/search.png" title="" alt="" border="0" height="20" align="absmiddle" id="buscar" name="buscar"/>
</p>

<div id="capa_datos"></div>
<?php }} ?>
