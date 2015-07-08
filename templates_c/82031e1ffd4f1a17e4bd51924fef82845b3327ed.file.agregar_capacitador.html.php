<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-04 12:52:35
         compiled from ".\templates\capacitadores\agregar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:53205590c0db1ee701-76331778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82031e1ffd4f1a17e4bd51924fef82845b3327ed' => 
    array (
      0 => '.\\templates\\capacitadores\\agregar_capacitador.html',
      1 => 1435890510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53205590c0db1ee701-76331778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5590c0db231136_80473689',
  'variables' => 
  array (
    'usrlogin' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590c0db231136_80473689')) {function content_5590c0db231136_80473689($_smarty_tpl) {?><?php echo '<script'; ?>
>
    
   
    function validar() {
        
        var valido = true;
        var error = "Por favor complete los siguiente campos: \n";

        var apellido = document.getElementById("apellido").value;
        if (apellido.trim() === "") {
            valido = false;
            error += " - Apellido\n";
        }

        var nombre = document.getElementById("nombre").value;
        if (nombre.trim() === "") {
            valido = false;
            error += " - Nombre\n";
        }

        var telefono = document.getElementById("telefono").value;
        var celular = document.getElementById("celular").value;
        if (telefono.trim() === "" && celular.trim() === "") {
            valido = false;
            error += " - Telefono y/o celular\n";
        }

        var dni = document.getElementById("dni").value;
        if (dni.trim() === "") {
            valido = false;
            error += " - D.N.I.\n";
        }
        
        var fecha_nac = document.getElementById("fecha_nacimiento").value;
        var edad = calcularEdad(fecha_nac);
        if ( edad < 18 ) {
            valido = false;
            error += " - El capacitador debe ser mayor a 18 a\u00F1os\n";
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
<form autocomplete="off" name="formCapacitador" action="index.php?section=capacitadores&sub=guardar_capacitador" method="POST">
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
    <input type="hidden" id="fecha_hoy" name="fecha_hoy" value="<?php echo $_smarty_tpl->tpl_vars['fecha_hoy']->value;?>
" />
    
    <label for="apellido">Apellido(*):</label>
    <input type="text" value="" id="apellido" name="apellido" class="letras" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="" id="nombre" name="nombre" class="letras" onkeyup="this.value = this.value.toUpperCase();"/>
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
    <input type="text" value="" id="domicilio" name="domicilio" onkeyup="this.value = this.value.toUpperCase();"/>
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

    <div align="center">
        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
        <input class="btnSubmit2" type="button" name="volver" value="Volver" onclick="history.back();">
    </div>
</form>
<?php }} ?>
