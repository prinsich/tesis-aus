<?php
session_start();
include_once("classes/class.Usuarios.php");
include_once("classes/class.Log_Estados.php");
include_once("classes/class.Log.php");

//obtenemos el usr y la pass
$username = $_POST['usr'];
$password = $_POST['password'];

$usuario = new Usuarios($db);
$logon = $usuario->login($username, $password);
echo $logon;/*
if($logon){
    $usrLogeado = $usuario->getUsuarioLogin($username);
    
    $_SESSION['logged_in'] = True;
    $_SESSION['usr'] = $usrLogeado["nombreusr"];
    $_SESSION['perfil'] = $usrLogeado["perfil"];
    $_SESSION['newpass'] = $usrLogeado["newpass"];
    
    $log = new Log($db);
    $log->crear_registro($usrLogeado["nombreusr"], "LOGIN", "", "");
    echo $usrLogeado["nombreusr"]."-".$usrLogeado["perfil"]."-".$usrLogeado["newpass"]."-"."success";
} else {
    $_SESSION['error'] = "Wrong username or password.";
    echo "error";
}*/