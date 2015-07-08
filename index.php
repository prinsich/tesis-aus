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
$logueado = true;
$usrlogin = "";
$usrperfil = "";
/*
$sectiones = array("login", "home", "alumnos", "capacitadores", "talleres", "certificados", "admin"); // => LOGOOUT NO FIGURA PORQUE SI NO ES UNA SESION AUTORIZADA INVOCA AL LOGUT Y DESTRUYE LA SECION
if(!in_array($section, $sectiones)){
    $section = "logout";
    $sub = "";
} */

//Verifica q este logueado
if ($section != "login") {
    if (!isset($_SESSION['logged_in'])) {
        $_SESSION['error'] = "You need to log in to access that page.";
        $section = "login";
        $sub = "acceso";
        
        $logueado = false;
        $usrlogin = "";
        $usrperfil = "";
    } else {
        $usrlogin = $_SESSION['usr'];
        $usrperfil = $_SESSION['perfil'];
    }
} else {
    if($sub == ""){
        $sub = "acceso"; 
    } else if($sub != "acceso" && $sub != "registro" && $sub != "lost_password"){
        $sub = "acceso"; 
    }
} 

//log out
if ($section == "logout") {
    unset($_GET['logout']);
    
    session_destroy();
    session_start();
    
    $_SESSION['error'] = 'You have been logged out.';
    
    $section = "login";
    $sub = "acceso";
    
    $logueado = false;
    $usrlogin = "";
    $usrperfil = "";
}

$usrlogin = "admin";
$usrperfil = "admin";
$logueado = true;

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
