<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 17:11:59
         compiled from ".\templates\alumnos\agregar_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:18901567ef24022acc0-43125761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d6049b3efc810a0097b14aa0354fb930f12b0f1' => 
    array (
      0 => '.\\templates\\alumnos\\agregar_alumno.html',
      1 => 1451160705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18901567ef24022acc0-43125761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567ef240381985_50310402',
  'variables' => 
  array (
    'usrlogin' => 0,
    'fecha_hoy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ef240381985_50310402')) {function content_567ef240381985_50310402($_smarty_tpl) {?>
<?php echo '<script'; ?>
>
    /*JQUERY*/
    $(document).ready(function () {
        $("ul#tabs li").click(function (e) {
            if (!$(this).hasClass("active")) {
                var tabNum = $(this).index();
                var nthChild = tabNum + 1;
                $("ul#tabs li.active").removeClass("active");
                $(this).addClass("active");
                $("ul#tab li.active").removeClass("active");
                $("ul#tab li:nth-child(" + nthChild + ")").addClass("active");
            }
        }); 
        $("#fecha_nacimiento").mask("99/99/9999");
    });

    /*JAVASCRIPT*/
    
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
    
    function validar_edad(fecha_input){
        var fecha_nacimiento = fecha_input.value;
        var edad = calcularEdad(fecha_nacimiento);
        if (edad < 6) {
            alert("El alumno debe ser mayor a 6 a\u00F1os\n");
            fecha_input.focus();
        }
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

        var sexo = document.getElementById("sexo").value;
        if (sexo === "00") {
            valido = false;
            error += " - Sexo\n";
        }

        var domicilio = document.getElementById("domicilio").value;
        if (domicilio.trim() === "") {
            valido = false;
            error += " - Domicilio\n";
        }

        var telefono = document.getElementById("telefono").value;
        if (telefono.trim() === "") {
            valido = false;
            error += " - Telefono\n";
        }

        var dni = document.getElementById("dni").value;
        if (dni.trim() === "") {
            valido = false;
            error += " - D.N.I.\n";
        }

        var fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
        if (fecha_nacimiento.trim() === "") {
            valido = false;
            error += " - Fecha de Nacimiento\n";
        } else {
            var edad = calcularEdad(fecha_nacimiento);
            if (edad < 6) {
                valido = false;
                error += " - El alumno debe ser mayor a 6 a\u00F1os\n";
            }
        }

        var alta_seguro = validCheckedRadioValue("alta_seguro_radio");
        if (alta_seguro === false) {
            valido = false;
            error += " - Alta del seguro\n";
        }

        var padre = document.getElementById("table_nombre").value;
        if (padre.trim() === "") {
            valido = false;
            error += " - Debe tener al menos un tutor legal\n";
        }

        var parentesco = document.getElementById("table_parentesco").value;
        if (parentesco.trim() === "") {
            valido = false;
            error += " - Debe tener al menos un parentesco con el tutor legal\n";
        }

        if (!valido) {
            alert(error);
        }

        return valido;
    }

    function guardar() {
        if (validar()) {
            document.getElementById("alta_seguro").value = getCheckedRadioValue("alta_seguro_radio");
            document.forms[0].submit();
        }
    }

    function ver_vac_faltantes() {
        var vac = document.getElementById("vacunacion").value;
        if (vac === "INCOMPLETAS") {
            document.getElementById("vac_faltantes").style.display = "inline";
        } else {
            document.getElementById("vac_faltantes").style.display = "none";
        }
    }

    function salir() {
        var respuesta = confirm("Esta seguro q desea salir?");
        if (respuesta)
            window.location = "index.php";
    }

<?php echo '</script'; ?>
>

<style>
    ul#tabs {
        list-style-type: none;
        padding: 0;
        text-align: center;
    }
    ul#tabs li {
        display: inline-block;
        background-color: #32c896;
        border-bottom: solid 5px #238b68;
        padding: 5px 20px;
        margin-bottom: 4px;
        color: #fff;
        cursor: pointer;
    }
    ul#tabs li:hover {
        background-color: #238b68;
    }
    ul#tabs li.active {
        background-color: #238b68;
    }
    ul#tab {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    ul#tab li {
        display: none;
    }
    ul#tab li.active {
        display: block;
    }
</style>

<h1>Agregar Alumno</h1>

<form autocomplete="off" id="formAlumno" name="formAlumno" action="index.php?section=alumnos&sub=guardar_alumno" method="POST" >
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
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_datos_personales.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_datos_medicos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("alumnos/agregar_datos_familiares.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </li>
    </ul>


    <h2>El taller se encuentra protegido por Seguro San Crist&oacute;bal</h2>
    <div align="center">
        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
        <input class="btnSubmit2" type="button" name="volver" value="Cancelar" onclick="salir()">
    </div>

</form><?php }} ?>
