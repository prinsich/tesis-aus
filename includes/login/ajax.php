<?php
include_once("configs/Sajax.php");
include_once("classes/class.Usuarios.php");
include_once("classes/class.Log_Estados.php");
include_once("classes/class.Log.php");

sajax_init();
sajax_export("login");

function login() {
    $_SESSION['logged_in'] = True;
    $_SESSION['usr'] = "admin";
    $_SESSION['perfil'] = "admin";
    return true;
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);

