<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 21:28:34
         compiled from ".\templates\alumnos\buscar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:2765454f3ef81184c41-31594982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cce377435dcbd86287ffb1faff2f1a2dfadee2a7' => 
    array (
      0 => '.\\templates\\alumnos\\buscar_alumno.html',
      1 => 1426192113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2765454f3ef81184c41-31594982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f3ef812391a5_62059829',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f3ef812391a5_62059829')) {function content_54f3ef812391a5_62059829($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_talleres')) include 'D:\\Program Files\\WampServer\\www\\ABM_AUS\\libs\\plugins\\function.html_talleres.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    

    function buscar_alumno() {
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var dni = document.getElementById("dni").value;
        var id_taller = document.getElementById("taller").value;
        var alta_seguro = document.getElementById("alta_seguro").value;
        x_buscar_alumnos(apellido, nombre, dni, id_taller, alta_seguro, resultado_cb);
    }

    function resultado_cb(z) {
        if (z === 0) {
            alert("No existe coincidencia con los datos ingresados\nPruebe nuevamente");
        } else {
            document.forms[0].submit();
        }
    }
    
    
<?php echo '</script'; ?>
>

<h1>Buscar Alumno</h1>

<form name="formBAlumno" action="index.php?section=alumnos&sub=listar_alumnos" method="POST">
    <label for="apellido">Apellido:</label>
    <input type="text" value="" name="apellido" class="letras" id="nombre"/>
    <br />

    <label for="nombre">Nombres:</label> 
    <input type="text" value="" name="nombre" class="letras" id="apellido"/>
    <br />

    <label for="dni">DNI:</label>
    <input type="text" value="" name="dni" id="dni"/>
    <br />

    <label for="taller">Taller:</label> 
    <?php echo smarty_function_html_talleres(array('name'=>"taller"),$_smarty_tpl);?>

    <br />		

    <label for="alta_seguro">Alta Seguro:</label> 
    <select name="alta_seguro" id="alta_seguro"> 
        <option value="" selected="selected">&nbsp;</option>
        <option value="no" >No</option>
        <option value="si">Si</option>
    </select>
    <br />

    <input class="btnSubmit" type="button" name="buscar" value="Buscar" onclick="buscar_alumno()">
</form><?php }} ?>
