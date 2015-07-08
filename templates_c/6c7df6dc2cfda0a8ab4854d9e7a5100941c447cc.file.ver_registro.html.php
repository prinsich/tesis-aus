<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 23:09:50
         compiled from ".\templates\admin\ver_registro.html" */ ?>
<?php /*%%SmartyHeaderCode:26985559aea7136e076-40390901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7df6dc2cfda0a8ab4854d9e7a5100941c447cc' => 
    array (
      0 => '.\\templates\\admin\\ver_registro.html',
      1 => 1436234988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26985559aea7136e076-40390901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559aea713e13c1_99735474',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559aea713e13c1_99735474')) {function content_559aea713e13c1_99735474($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_log_usr')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_log_usr.php';
if (!is_callable('smarty_function_html_log_accion')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_log_accion.php';
if (!is_callable('smarty_function_html_log_clase')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_log_clase.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    $(function () {
        $("#desde").datepicker({
            changeMonth: true,
            changeYear: true
        });
        $("#hasta").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });

    function buscar() {
        var desde = document.getElementById("desde").value;
        var hasta = document.getElementById("hasta").value;
        var usr = document.getElementById("usr").value;
        var accion = document.getElementById("accion").value;
        var clase = document.getElementById("clase").value;

        document.getElementById("hidden_desde").value = desde;
        document.getElementById("hidden_hasta").value = hasta;
        document.getElementById("hidden_usr").value = usr;
        document.getElementById("hidden_accion").value = accion;
        document.getElementById("hidden_clase").value = clase;

        x_ver_registro(desde, hasta, usr, accion, clase, buscar_cb);
    }

    function buscar_cb(log) {
        if (log !== "") {
            document.getElementById("capa_datos").innerHTML = log;
            document.getElementById("div_form").style.display = "block";
        } else {
            document.getElementById("div_form").style.display = "none";
        }
    }

    function imprimir() {
        document.forms[0].submit();
    }

    function buscar_cb(log) {
        document.getElementById("capa_datos").innerHTML = log;
    }
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

<input type="button" class="btnSubmit" value="Buscar" id="search" name="search" onclick="buscar();"/>
<hr />
<p>Resultado</p>
<div id="capa_datos">

</div>
<div id="div_form" style="display: inline">
    <form autocomplete="off" id="formPrintLog" action="index.php?section=admin&sub=print_log" method="POST" >
        <input type="hidden" value="" id="hidden_desde" name="hidden_desde" />
        <input type="hidden" value="" id="hidden_hasta" name="hidden_hasta" />
        <input type="hidden" value="" id="hidden_usr" name="hidden_usr" />
        <input type="hidden" value="" id="hidden_accion" name="hidden_accion" />
        <input type="hidden" value="" id="hidden_clase" name="hidden_clase" />
        <input type="button" class="btnSubmit" value="Imprimir" id="print" name="print" onclick="imprimir();"/>
    </form>
</div><?php }} ?>
