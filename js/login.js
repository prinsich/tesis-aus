$("#login-button").click(function (event) {
    var usr = $("#usr").val();
    var pass = $("#pass").val();

    if ($.trim(usr) !== "" && $.trim(pass) !== "") {
        var passmd5 = $().crypt({
            method: "md5",
            source: pass
        });
        $.ajax({
            url: 'includes/login/process-login.php',
            type: 'POST',
            async: true,
            data: 'usr=' + usr + '&password=' + passmd5,
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
        $("#error").html("Ingrese el usuario y/ocontrase&ntilde;a");
    }
});