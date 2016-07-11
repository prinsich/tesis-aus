$(document).ready(function () {

        //CALENDARIO JQUERY
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };

        $.datepicker.setDefaults($.datepicker.regional['es']);

        $("#modal_alert").dialog({
            autoOpen: false,
            modal: true,
            show: {
                effect: "blind",
                duration: 500
            },
            hide: {
                effect: "explode",
                duration: 300
            },
            buttons: [{
                text: "Aceptar",
                click: function () {
                    $(this).dialog("close");
                }
            }]
        }).css("font-size", "12px");

        $("#modal_confirm").dialog({
            autoOpen: false,
            modal: true,
            show: {
                effect: "blind",
                duration: 500
            },
            hide: {
                effect: "explode",
                duration: 300
            },
            buttons: [
                {
                    text: "Aceptar",
                    click: function () {
                        $(this).dialog("close");
                    }
                },
                {
                    text: "Cancelar",
                    click: function () {
                        $(this).dialog("close");
                    }
                }
            ]
        }).css("font-size", "12px");

        //SOLO INGRESA LETRAS, ESPACIOS Y BORRAR Y TABULACION
        $(".letras").keypress(function (key) {
            window.console.log(key.charCode);
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
            && (key.charCode < 65 || key.charCode > 90) //letras minusculas
            && (key.keyCode !== 46) //retroceso
            && (key.charCode !== 241) //ñ
            && (key.charCode !== 209) //Ñ
            && (key.charCode !== 32) //espacio
            && (key.charCode !== 225) //á
            && (key.charCode !== 233) //é
            && (key.charCode !== 237) //í
            && (key.charCode !== 243) //ó
            && (key.charCode !== 250) //ú
            && (key.charCode !== 193) //Á
            && (key.charCode !== 201) //É
            && (key.charCode !== 205) //Í
            && (key.charCode !== 211) //Ó
            && (key.charCode !== 218) //Ú
            && (key.which !== 8) //backspace
            && (key.keyCode !== 9) //tab
            && (key.keyCode !== 37) //izq
            && (key.keyCode !== 39) //der
        )
        return false;
    });

    //SOLO INGRESA NUMEROS, ESPACIOS, BORRAR, TABULACION Y FELCHAS
    $(".numeros").keypress(function (key) {
        window.console.log(key.charCode);
        if ((key.charCode < 48 || key.charCode > 57)//numeros
        && (key.keyCode !== 46) //retroceso
        && (key.charCode !== 32) //espacio
        && (key.which !== 8) //backspace
        && (key.keyCode !== 9) //tab
        && (key.keyCode !== 37) //izq
        && (key.keyCode !== 39) //der
    )
    return false;
    });

    $(".control_salida").click(function(event) {
        event.preventDefault();

        var sub = $("#sub").val();
        var href = $(this).attr("href");
        var salir = true;

        if (sub === "agregar_alumno" || sub === "modificar_alumno") {
            salir = false;
        } else if (sub === "agregar_capacitador" || sub === "modificar_capacitador") {
            salir = false;
        } else if (sub === "agregar_taller" || sub === "modificar_taller") {
            salir = false;
        } else if (sub === "agregar_usuario" || sub === "modificar_usuario") {
            salir = false;
        }

        if (!salir) {
            $("#modal_confirm").dialog("option", "title", "Salir del formulario");
            $("#modal_confirm").html("&iquest;Desea salir?");
            $("#modal_confirm").dialog("open");

            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    window.location.href = href;
                },
                "NO": function () {
                    $(this).dialog("close");
                }
            });
        } else {
            window.location.href = href;
        }
    });
});


function calcularEdad(fecha) {
    var fechaActual = new Date($("#fecha_hoy").val());
    var diaActual = fechaActual.getDate();
    var mmActual = fechaActual.getMonth() + 1;
    var yyyyActual = fechaActual.getFullYear();

    var FechaNac = fecha.split("/");
    var diaCumple = FechaNac[0];
    var mmCumple = FechaNac[1];
    var yyyyCumple = FechaNac[2];

    //retiramos el primer cero de la izquierda
    if (mmCumple.substr(0, 1) === 0) {
        mmCumple = mmCumple.substring(1, 2);
    }

    //retiramos el primer cero de la izquierda
    if (diaCumple.substr(0, 1) === 0) {
        diaCumple = diaCumple.substring(1, 2);
    }
    var edad = yyyyActual - yyyyCumple;

    //validamos si el mes de cumpleaños es menor al actual
    //o si el mes de cumpleaños es igual al actual
    //y el dia actual es menor al del nacimiento
    //De ser asi, se resta un año
    if ((mmActual < mmCumple) || (mmActual === mmCumple && diaActual < diaCumple)) {
        edad--;
    }
    return edad;
}

function getCheckedRadioValue(radioGroupName) {
    var rads = document.getElementsByName(radioGroupName);
    var i;
    for (i = 0; i < rads.length; i++)
        if (rads[i].checked)
            return rads[i].value;
    return null; // or undefined, or your preferred default for none checked
}

function cleanCheckedRadioValue(radioGroupName) {
    var rads = document.getElementsByName(radioGroupName);
    var i;
    for (i = 0; i < rads.length; i++)
        rads[i].checked = false;
}

function validCheckedRadioValue(radioGroupName) {
    var rads = document.getElementsByName(radioGroupName);
    var i;
    var checked = false;
    for (i = 0; i < rads.length; i++) {
        if (rads[i].checked) {
            checked = true;
            break;
        }
    }
    return checked;
}
