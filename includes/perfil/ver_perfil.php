<?php
include_once("includes/perfil/ajax.php");
include_once("classes/class.Usuarios.php");

$usuario = new Usuarios($db);
$dato_usuario = $usuario->getUsuarioName($usrlogin);
$smarty->assign("dato_usuario", $dato_usuario);