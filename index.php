<?php

session_start();
require ("configs/Smarty.php");
require ("configs/db.php");

//------------------------------------------------------------------------------
//CHECK DIRECTORIO INDEX.PHP
//------------------------------------------------------------------------------
$section = (isset($_GET["section"])) ? $_GET["section"] : "";
$sub = (isset($_GET["sub"])) ? $_GET["sub"] : "";

//------------------------------------------------------------------------------
//CONTROL DE SESION
//------------------------------------------------------------------------------
$sectiones = array("login", "home", "alumnos", "capacitadores", "talleres", "certificados", "admin", "perfil",""); // => LOGOOUT NO FIGURA PORQUE SI NO ES UNA SESION AUTORIZADA INVOCA AL LOGUT Y DESTRUYE LA SECION
if (!in_array($section, $sectiones)) {
    $section = "logout";
    $sub = "";
}
/*foreach ($_SESSION as $key => $valor) {
    echo "variable : $key <br>--Valor: $valor <br>";
}*/

//log out
if ($section == "logout") {
    unset($_GET['logout']);
    unset($_SESSION['logged_in']);
    session_unset();
    session_destroy();
    session_start();

    $section = "login";
    $sub = "acceso";

    $logueado = false;
    $usrlogin = "";
    $usrperfil = "";
    
} else if ($section != "login") {//Verifica q este logueado
    if (!isset($_SESSION['logged_in'])) {
        $section = "login";
        $sub = "acceso";

        $logueado = false;
        $usrlogin = "";
        $usrperfil = "";
    } else {
        $logueado = true;
        $usrlogin = $_SESSION['usr'];
        $usrperfil = $_SESSION['perfil'];
    }
} else {
    if ($sub == "") {
        $sub = "acceso";
    } else if ($sub != "acceso" && $sub != "registro" && $sub != "lost_password") {
        $sub = "acceso";
    }
}

$smarty->assign("section", $section);
$smarty->assign("sub", $sub);

$smarty->assign("logueado", $logueado);
$smarty->assign("usrlogin", $usrlogin);
$smarty->assign("usrperfil", $usrperfil);

if (!empty($section)) {
    if (file_exists("includes/" . $section . "/index.php"))
        include ("includes/" . $section . "/index.php");
}

$smarty->display('index.html');
