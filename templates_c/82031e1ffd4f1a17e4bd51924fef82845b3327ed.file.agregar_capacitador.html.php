<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 17:26:15
         compiled from ".\templates\capacitadores\agregar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:27894567ef7e7c52ae3-41130579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82031e1ffd4f1a17e4bd51924fef82845b3327ed' => 
    array (
      0 => '.\\templates\\capacitadores\\agregar_capacitador.html',
      1 => 1449004464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27894567ef7e7c52ae3-41130579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usrlogin' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567ef7e7cf2e95_47536036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ef7e7cf2e95_47536036')) {function content_567ef7e7cf2e95_47536036($_smarty_tpl) {?>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#fecha_nacimiento").mask("99/99/9999");
    });
    
    function validar_fecha(fecha_input){
        var fecha = fecha_input.value;
        var datePat = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
        var fechaCompleta = fecha.match(datePat);
        if (fechaCompleta == null) {
            return false;
        }

        dia = fechaCompleta[1];
        mes = fechaCompleta[3];
        anio = fechaCompleta[5];

        if (dia < 1 || dia > 31) {
            alert("El valor del día debe estar comprendido entre 1 y 31.");
            fecha_input.value = "";
            return false;
        }
        if (mes < 1 || mes > 12) {
            alert("El valor del mes debe estar comprendido entre 1 y 12.");
            fecha_input.value = "";
            return false;
        }
        if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 31) {
            alert("El mes " + mes + " no tiene 31 días!");
            fecha_input.value = "";
            return false;
        }
        if (mes == 2) { // bisiesto
            var bisiesto = (anio % 4 == 0 && (anio % 100 != 0 || anio % 400 == 0));
            if (dia > 29 || (dia == 29 && !bisiesto)) {
                alert("Febrero del " + anio + " no contiene " + dia + " dias!");
                fecha_input.value = "";
                return false;
            }
        }
        return true;
    }

   
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

        var dni = document.getElementById("dni").value;
        if (dni.trim() === ""){
            valido = false;
            error += " - D.N.I.\n";
        } else if(dni.length < 7 ){
             valido = false;
            error += " - D.N.I. invalido\n";
        }
                
        var sexo = document.getElementById("sexo").value;
        if (sexo === "0") {
            valido = false;
            error += " - Sexo\n";
        }

        var telefono = document.getElementById("telefono").value;
        var celular = document.getElementById("celular").value;
        if (telefono.trim() === "" && celular.trim() === "") {
            valido = false;
            error += " - Telefono y/o celular\n";
        }
        
        var fecha_nac = document.getElementById("fecha_nacimiento").value;
        if (fecha_nac.trim() !== "") {
            var edad = calcularEdad(fecha_nac);
            if (edad < 18) {
                valido = false;
                error += " - El capacitador debe ser mayor a 18 a\u00F1os\n";
            }
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
    
    function salir() {
        var respuesta = confirm("Esta seguro q desea salir?");
        if (respuesta)
            window.location = "index.php";
    }
    
<?php echo '</script'; ?>
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
    <input type="text" value="" id="apellido" name="apellido" class="letras"  />
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="" id="nombre" name="nombre" class="letras"  />
    <br />

    <label for="dni">D.N.I.(*):</label>
    <input type="text" value="" id="dni" name="dni" class="numeros" maxlength="8"/>
    <br />
    
    <label for="sexo">Sexo:</label> 
    <select name="sexo" id="sexo" style="width: 300px;"> 
        <option value="0" selected="selected" >SELECIONAR</option>
        <option value="M" >MASCULINO</option>
        <option value="F" >FEMENINO</option>
    </select>
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" value="" id="domicilio" name="domicilio"  />
    <br />

    <label for="telefono">Tel&eacute;fono(*):</label>
    <input type="text" value="" id="telefono" name="telefono" class="numeros" maxlength="15"/>
    <br />
    
    <label for="celular">Celular(*):</label>
    <input type="text" value="" id="celular" name="celular" class="numeros" maxlength="15"/>
    <br />

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="text" value="" id="fecha_nacimiento" name="fecha_nacimiento" onchange="validar_fecha(this);"/>
    <br />

    <div align="center">
        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
        <input class="btnSubmit2" type="button" name="cancel" value="Cancelar" onclick="salir()">
    </div>
</form>
<?php }} ?>
