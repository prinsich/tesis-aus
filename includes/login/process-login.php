<?php
/*
include_once("../../classes/class.Usuarios.php");
include_once("../../classes/class.Estados.php");
include_once("../../classes/class.Log.php");
*/
//obtenemos el usr y la pass
session_start();
$username = $_POST['usr'];
$password = $_POST['password'];

//$usuario = new Usuarios($db);
//$logon = $usuario->login($username, $password);
$logon = true;
if($logon){
    //$usrLogeado = $usuario->getUsuarioLogin($username);
    
    $usrLogeado["nombreusr"] = "admin";
    $usrLogeado["perfil"] = "admin";
    
    $_SESSION['logged_in'] = True;
    $_SESSION['usr'] = $usrLogeado["nombreusr"];
    $_SESSION['perfil'] = $usrLogeado["perfil"];
    
    //$log = new Log($db);
    //$log->crear_registro($usrLogeado["nombreusr"], "LOGIN", "", "");
    echo "success";
} else {
    $_SESSION['error'] = "Wrong username or password.";
    echo "error";
}