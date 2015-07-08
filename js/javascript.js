function justNumbers(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum === 8) || (keynum === 46))
        return true;

    return /\d/.test(String.fromCharCode(keynum));
}

function control_salida() {
    var section = document.getElementById("section").value;
    var sub = document.getElementById("sub").value;
    var salir = true;
    if (sub === "agregar_alumno" || sub === "modificar_alumno") {
        salir = false;
    } else if (sub === "agregar_capacitador" || sub === "modificar_capacitador") {
        salir = false;
    } else if (sub === "agregar_taller" || sub === "modificar_taller") {
        salir = false;
    }

    if (!salir) {
        salir = confirm("Esta por salir, perdera todos sus cambios si no guarda.\nDesea salir?");
    }

    return salir;

}

function calcularEdad(fecha) {
    var values = fecha.split("/");
    var dia = values[0];
    var mes = values[1];
    var ano = values[2];
    var fecha_hoy = new Date(document.getElementById("fecha_hoy").value);
    var ahora_ano = fecha_hoy.getUTCFullYear();
    var ahora_mes = fecha_hoy.getUTCMonth();
    var ahora_dia = fecha_hoy.getUTCDate();
    var edad = (ahora_ano + 1900) - ano;

    if (ahora_mes < (mes - 1)) {
        edad--;
    }

    if (((mes - 1) === ahora_mes) && (ahora_dia < dia)) {
        edad--;
    }

    if (edad > 1900) {
        edad -= 1900;
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