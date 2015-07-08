$(document).ready(function () {

    //FLECHA PARA IR ARRIBA
    $('.ir-arriba').click(function () {
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);
        }
    });
    
    //FLECHA PARA IR ABAJO
    $('.ir-abajo').click(function () {
        $('body, html').animate({
            scrollTop: $(document).height()
        }, 300);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.ir-abajo').slideDown(300);
        } else {
            $('.ir-abajo').slideUp(300);
        }
    });

    //SOLO INGRESA LETRAS, ESPACIOS Y BORRAR Y TABULACION
    $(".letras").keypress(function (key) {
        window.console.log(key.charCode);
        if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.keyCode  !== 46) //retroceso
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
                && (key.keyCode  !== 46) //retroceso
                && (key.charCode !== 32) //espacio
                && (key.which !== 8) //backspace
                
                && (key.keyCode !== 9) //tab
                && (key.keyCode !== 37) //izq
                && (key.keyCode !== 39) //der
                )
            return false;
    });

});