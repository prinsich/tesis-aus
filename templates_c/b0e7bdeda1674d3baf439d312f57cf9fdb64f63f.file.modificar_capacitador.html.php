<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:17:23
         compiled from ".\templates\capacitadores\modificar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:2159456e0e02aeb5d33-62188416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e7bdeda1674d3baf439d312f57cf9fdb64f63f' => 
    array (
      0 => '.\\templates\\capacitadores\\modificar_capacitador.html',
      1 => 1457929041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2159456e0e02aeb5d33-62188416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e0e02b022e81_82122212',
  'variables' => 
  array (
    'datos_capacitador' => 0,
    'usrlogin' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0e02b022e81_82122212')) {function content_56e0e02b022e81_82122212($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function () {
        $("#fecha_nacimiento").mask("99/99/9999");

        //Validacion del formato de la fecha
        $("#fecha_nacimiento").change(function(){
            var fecha_nacimiento = $(this).val();
            var datePat = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
            var fechaCompleta = fecha_nacimiento.match(datePat);

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
                $(this).val("");
                fecha_valida = false;
            }
            if (mes < 1 || mes > 12) {
                msj += "El valor del mes debe estar comprendido entre 1 y 12.<br />";
                $(this).val("");
                fecha_valida = false;
            }
            if ((mes === 4 || mes === 6 || mes === 9 || mes === 11) && dia === 31) {
                msj += "El mes " + mes + " no tiene 31 días.<br />";
                $(this).val("");
                fecha_valida = false;
            }
            if (mes === 2) { // bisiesto
                var bisiesto = (anio % 4 === 0 && (anio % 100 !== 0 || anio % 400 === 0));
                if (dia > 29 || (dia === 29 && !bisiesto)) {
                    msj += "Febrero del " + anio + " no contiene " + dia + " dias.<br />";
                    $(this).val("");
                    fecha_valida = false;
                }
            }

            //validacion de la edad
            if(fecha_valida){
                var edad = calcularEdad(fecha_nacimiento);
                if (edad < 18 || edad > 80) {
                    msj += "El alumno debe ser mayor a 18 a\u00F1os<br />"
                    fecha_valida = false;
                }
            }

            if(!fecha_valida){
                $("#modal_alert").dialog("option", "title", "Error en la fecha de nacimeiento");
                $("#modal_alert").html(msj);
                $("#modal_alert").dialog("open");
                $(this).val("");
                $(this).focus();
                return false;
            } else {
                return true;
            }

        });

        $("#guardar").click(function (){
            if(validar()){
              $("#formModificarCapacitador").submit();
            }
        });

        //Salir de la pantalla
        $("#cancelar").click(function () {
            $("#modal_confirm").dialog("option", "title", "Sal\u00edr");
            $("#modal_confirm").html("&iquest;Esta seguro que desea sal&iacute;r?");
            $("#modal_confirm").dialog("open");
        });

        //Set botones confirmar
        $("#modal_confirm").dialog("option", "buttons", {
            "SI": function () {
                window.location = "index.php?section=capacitadores&sub=listar_capacitadores";
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

<h1>Modificar Capacitador</h1>
<h2>Datos Personales</h2>
<p>Los campos marcado con <b>*</b> son obligatorios</p>
<form autocomplete="off" name="formModificarCapacitador" id="formModificarCapacitador" action="index.php?section=capacitadores&sub=guardar_capacitador" method="POST">
    <input type="hidden" id="accion" name="accion" value="modificar" />
    <input type="hidden" id="id_capacitador" name="id_capacitador" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['id_capacitador'];?>
" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
    <input type="hidden" id="fecha_hoy" name="fecha_hoy" value="<?php echo $_smarty_tpl->tpl_vars['fecha_hoy']->value;?>
" />

    <label for="apellido">Apellido(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['apellido'];?>
" id="apellido" name="apellido" class="letras"   />
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['nombre'];?>
" id="nombre" name="nombre" class="letras"   />
    <br />

    <label for="dni">DNI(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['dni'];?>
" id="dni" name="dni" class="numeros" maxlength="8" />
    <br />

    <label for="sexo">Sexo:</label>
    <select name="sexo" id="sexo" style="width: 300px;">
        <?php if ($_smarty_tpl->tpl_vars['datos_capacitador']->value['sexo']=="M") {?>
            <option value="M" selected="selected" >MASCULINO</option>
            <option value="F">FEMENINO</option>
        <?php } else { ?>
            <option value="M">MASCULINO</option>
            <option value="F" selected="selected">FEMENINO</option>
        <?php }?>
    </select>
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['domicilio'];?>
" id="domicilio" name="domicilio"   />
    <br />

    <label for="telefono">Tel&eacute;fono(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['telefono'];?>
" id="telefono" name="telefono" class="numeros"/>
    <br />

    <label for="celular">Celular(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['celular'];?>
" id="celular" name="celular" class="numeros"/>
    <br />

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datos_capacitador']->value['fecha_nacimiento'],'d/m/Y');?>
" id="fecha_nacimiento" name="fecha_nacimiento" />
    <br />

    <div align="center">
        <button class="multipleBtnSubmit" type="button" id="guardar" name="guardar" >Guardar</button>
        <button class="multipleBtnSubmit" type="button" id="cancelar" name="cancelar" >Cancelar</button>
    </div>
</form>
<?php }} ?>
