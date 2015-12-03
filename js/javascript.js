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
    var fechaActual = new Date(document.getElementById("fecha_hoy").value);
    var diaActual = fechaActual.getDate();
    var mmActual = fechaActual.getMonth() + 1;
    var yyyyActual = fechaActual.getFullYear();
    
    FechaNac = fecha.split("/");
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