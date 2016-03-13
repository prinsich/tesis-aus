<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-13 00:36:26
         compiled from ".\templates\capacitadores\agregar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:27894567ef7e7c52ae3-41130579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82031e1ffd4f1a17e4bd51924fef82845b3327ed' => 
    array (
      0 => '.\\templates\\capacitadores\\agregar_capacitador.html',
      1 => 1457839491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27894567ef7e7c52ae3-41130579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567ef7e7cf2e95_47536036',
  'variables' => 
  array (
    'usrlogin' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ef7e7cf2e95_47536036')) {function content_567ef7e7cf2e95_47536036($_smarty_tpl) {?><?php echo '<script'; ?>
 language="javascript" type="text/javascript">

    $(document).ready(function () {
        $("#fecha_nacimiento").mask("99/99/9999");

        //Validacion del formato de la fecha
        $("#fecha_nacimiento").change(function(){
            var fecha = $(this).val();
            var datePat = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
            var fechaCompleta = fecha.match(datePat);

            var msj = "";
            var fecha_valida = true;

            if (fechaCompleta === null) {
                fecha_valida = false;
            }

            var dia = fechaCompleta[1];
            var mes = fechaCompleta[3];
            var anio = fechaCompleta[5];

            if (dia < 1 || dia > 31) {
                msj += "El valor del d&iacute;a debe estar comprendido entre 1 y 31.<br />";
                this.val() = "";
                fecha_valida = false;
            }
            if (mes < 1 || mes > 12) {
                msj += "El valor del mes debe estar comprendido entre 1 y 12.<br />";
                this.val() = "";
                 fecha_valida = false;
            }
            if ((mes === 4 || mes === 6 || mes === 9 || mes === 11) && dia === 31) {
                msj += "El mes " + mes + " no tiene 31 días.<br />";
                this.val() = "";
                fecha_valida = false;
            }
            if (mes === 2) { // bisiesto
                var bisiesto = (anio % 4 === 0 && (anio % 100 !== 0 || anio % 400 === 0));
                if (dia > 29 || (dia === 29 && !bisiesto)) {
                    msj += "Febrero del " + anio + " no contiene " + dia + " dias.";
                    this.val() = "";
                    fecha_valida = false;
                }
            }

            if(fecha_valida){
                return true;
            } else {
                $("#modal_alert").dialog("option", "title", "Error en la fecha de nacimeiento");
                $("#modal_alert").html(msj);
                $("#modal_alert").dialog("open");
                return false;
            }
        });

        //validacion de la edad
        $("#fecha_nacimiento").change(function(){
            var fecha_nacimiento = $(this).val();
            var edad = calcularEdad(fecha_nacimiento);
            if (edad < 18) {
                $("#modal_alert").dialog("option", "title", "Error en la fecha de nacimeiento");
                $("#modal_alert").html("El alumno debe ser mayor a 18 a\u00F1os<br />");
                $("#modal_alert").dialog("open");
                $(this).val("");
                $(this).focus();
            }
        });

        $("#guardar").click(function (){
            if(validar()){
              $("#formAgregarCapacitador").submit();
            }
        });

        //Salir de la pantalla
        $("#cancel").click(function () {
            $("#modal_confirm").dialog("option", "title", "Sal&iacute;r del formulario");
            $("#modal_confirm").html("&iquest;Esta seguro que desea sal&iacute;r?");
            $("#modal_confirm").dialog("open");
        });

        //Set botones confirmar
        $("#modal_confirm").dialog("option", "buttons", {
            "SI": function () {
                window.location = "index.php";
            },
            "NO": function () {
                $(this).dialog("close");
            }
        });

        function validar() {
            var valido = true;
            var error = "Por favor complete los siguiente campos: <br />";

            var apellido = $("#apellido").val();
            if (apellido.trim() === "") {
                valido = false;
                error += " - Apellido<br />";
            }

            var nombre = $("#nombre").val();
            if (nombre.trim() === "") {
                valido = false;
                error += " - Nombre<br />";
            }

            var dni = $("#dni").val();
            if (dni.trim() === ""){
                valido = false;
                error += " - D.N.I.<br />";
            } else if(dni.length < 7 ){
                 valido = false;
                error += " - D.N.I. invalido<br />";
            }

            var sexo = $("#sexo").val;
            if (sexo === "0") {
                valido = false;
                error += " - Sexo<br />";
            }

            var telefono = $("#telefono").val();
            var celular = $("#celular").val();
            if (telefono.trim() === "" && celular.trim() === "") {
                valido = false;
                error += " - Telefono y/o celular<br />";
            }

            var fecha_nacimiento = $("#fecha_nacimiento").val();
            if (fecha_nacimiento.trim() === "") {
                valido = false;
                error += " - Fecha de Nacimiento<br />";
            }

            if (!valido) {
                $("#modal_alert").dialog("option", "title", "Validacion de los datos del Capacitador");
                $("#modal_alert").html(error);
                $("#modal_alert").dialog("open");
            }

            return valido;
        }

    });

<?php echo '</script'; ?>
>


<h1>Agregar Capacitador</h1>
<h2>Datos Personales</h2>
<p>Los campos marcado con <b>*</b> son obligatorios</p>
<form autocomplete="off" name="formAgregarCapacitador" id="formAgregarCapacitador" action="index.php?section=capacitadores&sub=guardar_capacitador" method="POST">
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
    <input type="text" value="" id="fecha_nacimiento" name="fecha_nacimiento" />
    <br />

    <div align="center">
        <button class="btnSubmit2" type="button" id="guardar" name="guardar" >Guardar</button>
        <button class="btnSubmit2" type="button" id="cancel" name="cancel" >Cancelar</button>
    </div>
</form>
<?php }} ?>
