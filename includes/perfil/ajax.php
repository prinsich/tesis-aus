<?php

include_once("configs/Sajax.php");
include_once("classes/class.Usuarios.php");

sajax_init();
sajax_export("newPassword");

function newPassword($username, $newPass) {
    global $db;

    $usuario = new Usuarios($db);
    $usuario->setPassword($username, $newPass);
    return true;
}

sajax_handle_client_request();
$mscript = sajax_get_javascript();
$smarty->assign("Sajax", $mscript);
?>

