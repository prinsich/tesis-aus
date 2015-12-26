<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 19:04:23
         compiled from ".\templates\certificados\crear_certificados.html" */ ?>
<?php /*%%SmartyHeaderCode:20407567f09b32f9472-21705566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8bb23d533978b937e02035bf47d6118307423b3' => 
    array (
      0 => '.\\templates\\certificados\\crear_certificados.html',
      1 => 1451167459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20407567f09b32f9472-21705566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567f09b33c12b1_36797792',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f09b33c12b1_36797792')) {function content_567f09b33c12b1_36797792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_talleres.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    
    function crear_certificado(id_alumno){
        var id_taller = document.getElementById("taller").value;
        var estado = document.getElementById("estado_" + id_alumno).value;
        var urlp = "index.php?section=certificados&sub=imprimir&id_alumno=" + id_alumno + "&id_taller=" + id_taller + "&estado=" + estado;
        window.open(urlp, "_self");
    }
    
    function buscar_alumnos(){
        var id_taller = document.getElementById("taller").value;
        if(id_taller !== 0){
            x_buscar_alumnos(id_taller, retorno_cb);
        } else {
            alert("Selecione un taller");
        }
    }
    
    function retorno_cb(z){
        if (z !== "") {
            document.getElementById("capa_datos").innerHTML = z;
        }
        else
            document.getElementById("capa_datos").innerHTML = "";
    }
    
    
<?php echo '</script'; ?>
>
<h1>Certificados</h1>

<p><?php echo smarty_function_html_talleres(array('name'=>"taller",'estado'=>"ACTIVO"),$_smarty_tpl);?>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="images/icons/search.png" title="" alt="" border="0" height="20" align="absmiddle" onclick="buscar_alumnos()"/>
</p>

<div id="capa_datos"></div><?php }} ?>
