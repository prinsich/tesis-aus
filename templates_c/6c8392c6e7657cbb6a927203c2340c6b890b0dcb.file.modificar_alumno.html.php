<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 17:33:03
         compiled from ".\templates\alumnos\modificar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:26690567f09c48a81a9-78162082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c8392c6e7657cbb6a927203c2340c6b890b0dcb' => 
    array (
      0 => '.\\templates\\alumnos\\modificar_alumno.html',
      1 => 1457987506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26690567f09c48a81a9-78162082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567f09c49f9ee6_20505089',
  'variables' => 
  array (
    'datos_alumno' => 0,
    'datos_medicos' => 0,
    'datos_personales' => 0,
    'usrlogin' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f09c49f9ee6_20505089')) {function content_567f09c49f9ee6_20505089($_smarty_tpl) {?><?php echo '<script'; ?>
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
                $("#formModificarAlumno").submit();
            }
        });

        //Salir de la pantalla
        $("#salir").click(function () {
            $("#modal_confirm").dialog("option", "title", "Sal&iacute;r del formulario");
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


        $("#fecha_nacimiento").change(function(){
            var fecha_nacimiento = $(this).val();
            var datePat = "/^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/";
            var fechaCompleta = fecha_nacimiento.match(datePat);

            if (fechaCompleta === null) {
                return false;
            }

            var msj = "";
            var fecha_valida = true;

            var dia = fechaCompleta[1];
            var mes = fechaCompleta[3];
            var anio = fechaCompleta[5];

            if (dia < 1 || dia > 31) {
                msj += "El valor del día debe estar comprendido entre 1 y 31. <br />";
                this.val() = "";
                return false;
            }
            if (mes < 1 || mes > 12) {
                msj += "El valor del mes debe estar comprendido entre 1 y 12. <br />";
                this.val() = "";
                return false;
            }
            if ((mes === 4 || mes === 6 || mes === 9 || mes === 11) && dia === 31) {
                msj += "El mes " + mes + " no tiene 31 días. <br />";
                this.val() = "";
                return false;
            }
            if (mes === 2) { // bisiesto
                var bisiesto = (anio % 4 === 0 && (anio % 100 !== 0 || anio % 400 === 0));
                if (dia > 29 || (dia === 29 && !bisiesto)) {
                    msj += "Febrero del " + anio + " no contiene " + dia + " dias. <br />";
                    this.val() = "";
                    return false;
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

            var alta_seguro = validCheckedRadioValue("alta_seguro_radio");
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

            if(!valido){
                $("#modal_alert").dialog("option", "title", "Validacion de antecedentes");
                $("#modal_alert").html(error);
                $("#modal_alert").dialog("open");
            }

            return valido;
        }
    });

<?php echo '</script'; ?>
>

<h1>Modificar Alumno</h1>

<form autocomplete="off" name="formModificarAlumno" id="formModificarAlumno" action="index.php?section=alumnos&sub=guardar_alumno" method="POST">
    <input type="hidden" id="accion" name="accion" value="modificar" />
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['id_alumno'];?>
" id="id_alumno" name="id_alumno" />
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['id_dato_medico'];?>
" id="id_dato_medico" name="id_dato_medico" />
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['id_personal'];?>
" id="id_personal" name="id_personal" />
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
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/modificar_datos_personales.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/modificar_datos_medicos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/modificar_datos_familiares.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
    </ul>

    <h2>El taller se encuentra protegido por Seguro San Crist&oacute;bal.</h2>
    <div align="center">
        <button type="button" class="multipleBtnSubmit" name="guardar" id="guardar" >Guardar</button>
        <button type="button" class="multipleBtnSubmit" name="salir" id="salir" >Cancelar</button>
    </div>

</form>
<?php }} ?>
