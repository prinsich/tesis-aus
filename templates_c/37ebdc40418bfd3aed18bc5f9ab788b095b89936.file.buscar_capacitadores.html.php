<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-04 20:46:40
         compiled from ".\templates\capacitadores\buscar_capacitadores.html" */ ?>
<?php /*%%SmartyHeaderCode:2798055934fda254866-45460057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ebdc40418bfd3aed18bc5f9ab788b095b89936' => 
    array (
      0 => '.\\templates\\capacitadores\\buscar_capacitadores.html',
      1 => 1436044547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2798055934fda254866-45460057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55934fda31f594_04513145',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55934fda31f594_04513145')) {function content_55934fda31f594_04513145($_smarty_tpl) {?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    

    function buscar_capacitadores() {
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var dni = document.getElementById("dni").value;
        var estado = document.getElementById("estado").value;
        x_buscar_capacitadores(apellido, nombre, dni, estado, resultado_cb);
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

<h1>Buscar Capacitadores</h1>
<p>
    Complete los datos para poder filtar la busqueda<br />
    Si deja el formulario en blanco visualizara la totalidad de los capacitores
</p>
<form autocomplete="off" name="formBAlumno" action="index.php?section=capacitadores&sub=listar_capacitadores" method="POST">
    <label for="apellido">Apellido:</label>
    <input type="text" value="" name="apellido" class="letras" id="apellido"/>
    <br />

    <label for="nombre">Nombres:</label> 
    <input type="text" value="" name="nombre" class="letras" id="nombre"/>
    <br />

    <label for="dni">DNI:</label>
    <input type="text" value="" name="dni" class="numeros" maxlength="8" id="dni"/>
    <br />

    <label for="dni">Estado:</label>
    <select id="estado" name="estado">
        <option value=""> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
    </select>
    <br />

    <input class="btnSubmit" type="button" name="buscar" value="Buscar" onclick="buscar_capacitadores()">
</form>
<?php }} ?>
