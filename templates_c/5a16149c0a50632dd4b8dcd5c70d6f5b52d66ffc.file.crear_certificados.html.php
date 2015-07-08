<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-07 18:45:00
         compiled from ".\templates\certificados\crear_certificados.html" */ ?>
<?php /*%%SmartyHeaderCode:2108954f91da8321543-30247979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a16149c0a50632dd4b8dcd5c70d6f5b52d66ffc' => 
    array (
      0 => '.\\templates\\certificados\\crear_certificados.html',
      1 => 1430863737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2108954f91da8321543-30247979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f91da8329fe8_23303837',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f91da8329fe8_23303837')) {function content_54f91da8329fe8_23303837($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_talleres')) include 'D:\\Program Files\\WampServer\\www\\ABM_AUS\\libs\\plugins\\function.html_talleres.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    
    function crear_certificado(id_alumno){
        var id_taller = document.getElementById("taller").value;
        var estado = document.getElementById("estado").value;
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

<p><?php echo smarty_function_html_talleres(array('name'=>"taller"),$_smarty_tpl);?>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="images/icons/search.png" title="" alt="" border="0" height="20" align="absmiddle" onclick="buscar_alumnos()"/>
</p>

<div id="capa_datos"></div><?php }} ?>
