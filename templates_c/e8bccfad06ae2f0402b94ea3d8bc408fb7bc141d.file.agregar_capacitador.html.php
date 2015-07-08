<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-13 03:56:26
         compiled from ".\templates\capacitadores\agregar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:1139854f7755e6bb2f4-09639662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8bccfad06ae2f0402b94ea3d8bc408fb7bc141d' => 
    array (
      0 => '.\\templates\\capacitadores\\agregar_capacitador.html',
      1 => 1426097877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139854f7755e6bb2f4-09639662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f7755e704c76_76864540',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f7755e704c76_76864540')) {function content_54f7755e704c76_76864540($_smarty_tpl) {?><?php echo '<script'; ?>
>
    
    function validar() {
        
        var valido = true;
        var error = "Por favor complete los siguiente campos: \n";

        var apellido = document.getElementById("apellido").value;
        if (apellido === "") {
            valido = false;
            error += " - Apellido\n";
        }

        var nombre = document.getElementById("nombre").value;
        if (nombre === "") {
            valido = false;
            error += " - Nombre\n";
        }

        var telefono = document.getElementById("telefono").value;
        var celular = document.getElementById("celular").value;
        if (telefono === "" && celular === "") {
            valido = false;
            error += " - Telefono y/o celular\n";
        }

        var dni = document.getElementById("dni").value;
        if (dni === "") {
            valido = false;
            error += " - D.N.I.\n";
        }

        if(!valido){
            alert(error);
        }
        
        return valido;
    }
         
    function guardar(){
        if(validar()){
            document.forms[0].submit();
        }
    }
    
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/date/datetimepicker_css.js"><?php echo '</script'; ?>
>

<h1>Agregar Capacitador</h1>
<h2>Datos Personales</h2>
<p>Los campos marcado con <b>*</b> son obligatorios</p>
<form name="formCapacitador" action="index.php?section=capacitadores&sub=guardar_capacitador" method="POST">
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <label for="apellido">Apellido(*):</label>
    <input type="text" value="" id="apellido" name="apellido" class="letras"/>
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="" id="nombre" name="nombre" class="letras"/>
    <br />

    <label for="dni">DNI(*):</label>
    <input type="text" value="" id="dni" name="dni" class="numeros" maxlength="8"/>
    <br />
    
    <label for="sexo">Sexo:</label> 
    <select name="sexo" id="sexo" style="width: 300px;"> 
        <option value="MASCULINO" selected="selected" >MASCULINO</option>
        <option value="FEMENINO">FEMENINO</option>
    </select>
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" value="" id="domicilio" name="domicilio" />
    <br />

    <label for="telefono">Tel&eacute;fono(*):</label>
    <input type="text" value="" id="telefono" name="telefono" class="numeros"/>
    <br />
    
    <label for="celular">Celular(*):</label>
    <input type="text" value="" id="celular" name="celular" class="numeros"/>
    <br />

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="text" value="" id="fecha_nacimiento" name="fecha_nacimiento" onclick="javascript:NewCssCal(id)" readonly/>
    <br />

    <input class="btnSubmit" type="button" name="save" value="Guardar" onclick="guardar();">
</form>
<?php }} ?>
