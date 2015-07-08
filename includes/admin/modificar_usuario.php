<?php
include_once("classes/class.Usuarios.php");

$usuario = new Usuarios($db);

$id_usuario = $_GET["id_usuario"];

$dato_usuario = $usuario->getUsuario($id_usuario);

$smarty->assign("dato_usuario", $dato_usuario);
$smarty->assign("usrlogin", $usrlogin);
$smarty->assign("fecha_hoy", date("Y-m-d")."T23:59:59");