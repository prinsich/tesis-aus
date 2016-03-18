<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 16:36:26
         compiled from ".\templates\alumnos\agregar_alumno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2726056eb073a455a05-15178942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9246b44d996e6e8263761e3435c2279df1553acd' => 
    array (
      0 => '.\\templates\\alumnos\\agregar_alumno.tpl',
      1 => 1458243345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2726056eb073a455a05-15178942',
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
  'unifunc' => 'content_56eb073a487a29_07421844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb073a487a29_07421844')) {function content_56eb073a487a29_07421844($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function () {
        //Tabs
        $("ul#tabs li").click(function () {
            if (!$(this).hasClass("active")) {
                var tabNum = $(this).index();
                var nthChild = tabNum + 1;
                $("ul#tabs li.active").removeClass("active");
                $(this).addClass("active");
                $("ul#tab li.active").removeClass("active");
                $("ul#tab li:nth-child(" + nthChild + ")").addClass("active");
            }
        });

        //Mascaras para las fechas
        $("#fecha_nacimiento").mask("99/99/9999");

        //Guardar datos
        $("#guardar").click(function () {
            if (validar()) {
                $("#alta_seguro").val(getCheckedRadioValue("alta_seguro_radio"));
                $("#formAgregarAlumno").submit();
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
                window.location = "index.php?section=alumnos&sub=listar_alumnos";
            },
            "NO": function () {
                $(this).dialog("close");
            }
        });

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

            //validacion de la edad
            if(fecha_valida){
                var edad = calcularEdad(fecha_nacimiento);
                if (edad < 6 || edad > 18) {
                    msj += "El alumno debe ser mayor a 6 a\u00F1os y menor de 18<br />"
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

        //Muestra la vacunacion
        $("#vacunacion").change(function (){
            var vac = this.val();
            if(vac === "I"){
                $("#vac_faltantes").css('display','inline');
            } else {
                $("#vac_faltantes").css('display','none');
                $("#vacunas_faltantes").html("");
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

            var sexo = $("#sexo").val();
            if (sexo === "00") {
                valido = false;
                error += " - Sexo<br />";
            }

            var domicilio = $("#domicilio").val();
            if (domicilio.trim() === "") {
                valido = false;
                error += " - Domicilio<br />";
            }

            var telefono = $("#telefono").val();
            if (telefono.trim() === "") {
                valido = false;
                error += " - Telefono<br />";
            }

            var dni = $("#dni").val();
            if (dni.trim() === "") {
                valido = false;
                error += " - D.N.I.<br />";
            }

            var fecha_nacimiento = $("#fecha_nacimiento").val();
            if (fecha_nacimiento.trim() === "") {
                valido = false;
                error += " - Fecha de Nacimiento<br />";
            }

            var alta_seguro = $("#alta_seguro_radio");
            if (alta_seguro === false) {
                valido = false;
                error += " - Alta del seguro<br />";
            }

            var padre = $("#table_nombre").val();
            if (padre.trim() === "") {
                valido = false;
                error += " - Debe tener al menos un tutor legal<br />";
            }

            var parentesco = $("#table_parentesco").val();
            if (parentesco.trim() === "") {
                valido = false;
                error += " - Debe tener al menos un parentesco con el tutor legal<br />";
            }

            if (!valido) {
                $("#modal_alert").dialog("option", "title", "Validacion de datos del Alumno");
                $("#modal_alert").html(error);
                $("#modal_alert").dialog("open");
            }

            return valido;
        }
    });

<?php echo '</script'; ?>
>

<h1>Agregar Alumno</h1>

<form autocomplete="off" id="formAgregarAlumno" name="formAgregarAlumno" action="index.php?section=alumnos&sub=guardar_alumno" method="POST" >
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
    <input type="hidden" id="fecha_hoy" name="fecha_hoy" value="<?php echo $_smarty_tpl->tpl_vars['fecha_hoy']->value;?>
" />

    <ul id="tabs">
        <li class="active">Datos Personales</li>
        <li>Datos M&eacute;dicos</li>
        <li>Grupo Familiar y/o de Convivencia</li>
    </ul>
    <ul id="tab">
        <li class="active">
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_datos_personales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_datos_medicos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_datos_familiares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
    </ul>

    <h2>El taller se encuentra protegido por Seguro San Crist&oacute;bal</h2>
    <div style="text-align: center">
        <button type="button" class="multipleBtnSubmit" name="guardar" id="guardar" >Guardar</button>
        <button type="button" class="multipleBtnSubmit" name="cancelar" id="cancelar" >Cancelar</button>
    </div>
</form>
<?php }} ?>
