<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-04 20:48:24
         compiled from ".\templates\alumnos\buscar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:19481558f75041b47e5-89708962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aef2b827e67454a63ddc5c1897c6a0714af21f7c' => 
    array (
      0 => '.\\templates\\alumnos\\buscar_alumno.html',
      1 => 1436044522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19481558f75041b47e5-89708962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558f750427fa82_76168838',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f750427fa82_76168838')) {function content_558f750427fa82_76168838($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_talleres')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_talleres.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    

    function buscar_alumno() {
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var dni = document.getElementById("dni").value;
        var id_taller = document.getElementById("taller").value;
        var alta_seguro = document.getElementById("alta_seguro").value;
        var estado = document.getElementById("estado").value;
        x_buscar_alumnos(apellido, nombre, dni, id_taller, alta_seguro, estado, resultado_cb);
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
<p>
    Complete los datos para poder filtar la busqueda<br />
    Si deja el formulario en blanco visualizara la totalidad de los alumnos
</p>
<form autocomplete="off" name="formBAlumno" action="index.php?section=alumnos&sub=listar_alumnos" method="POST">
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
    
    <label for="dni">Estado:</label>
    <select id="estado" name="estado">
        <option value=""> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
    </select>
    <br />

    <input class="btnSubmit" type="button" name="buscar" value="Buscar" onclick="buscar_alumno()">
</form><?php }} ?>
