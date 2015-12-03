$('#pass').on('keypress', function (event) {
    if (event.which === 13) {

        //Disable textbox to prevent multiple submit
        //$(this).attr("disabled", "disabled");

        var usr = $("#usr").val();
        var pass = $("#pass").val();

        if ($.trim(usr) !== "" && $.trim(pass) !== "") {
            /*var passmd5 = $().crypt({
             method: "md5",
             source: pass
             });*/
            $.ajax({
                url: 'includes/login/process-login.php',
                type: 'POST',
                async: true,
                data: 'usr=' + usr + '&password=' + pass,
                success: function (status) {
                    if (status === "success") {
                        $("#error").html("");
                        event.preventDefault();
                        $('form').fadeOut(500);
                        $('.wrapper').addClass('form-success');
                        setTimeout(function () {
                            window.location.href = "index.php";
                        }, 2500);
                    } else if (status === "error") {
                        $("#error").html("El usuario o la contrase&ntilde;a son incorrectos");
                    }
                }
            });
        } else {
            $("#error").html("Ingrese el usuario y/o contrase&ntilde;a");
        }
    }
});

$("#login-button").click(function (event) {
    var usr = $("#usr").val();
    var pass = $("#pass").val();

    if ($.trim(usr) !== "" && $.trim(pass) !== "") {
        /*var passmd5 = $().crypt({
         method: "md5",
         source: pass
         });*/
        $.ajax({
            url: 'includes/login/process-login.php',
            type: 'POST',
            async: true,
            data: 'usr=' + usr + '&password=' + pass,
            success: function (status) {
                if (status === "success") {
                    $("#error").html("");
                    event.preventDefault();
                    $('form').fadeOut(500);
                    $('.wrapper').addClass('form-success');
                    setTimeout(function () {
                        window.location.href = "index.php";
                    }, 2500);
                } else if (status === "error") {
                    $("#error").html("El usuario o la contrase&ntilde;a son incorrectos");
                }
            }
        });
    } else {
        $("#error").html("Ingrese el usuario y/o contrase&ntilde;a");
    }
});

$("#lost-pass-button").click(function (event) {

    var usr = $("#user").val();

    if ($.trim(usr) !== "") {
        $.ajax({
            url: 'includes/login/setPass.php',
            type: 'POST',
            async: true,
            data: 'usr=' + usr,
            success: function (status) {
                var result = status.split("-");
                if (result[0] === "success") {
                    $("#pass1").val(result[1]);
                } else if (result[0] === "error") {
                    alert("El usuario no existe");
                }

            }
        });
    } else {
        alert("Ingrese su usuario");
    }
});