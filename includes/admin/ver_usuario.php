<?php
include_once("classes/class.Usuarios.php");

$usuario = new Usuarios($db);

$id_usuario = filter_input(INPUT_GET, 'id_usuario');

$dato_usuario = $usuario->getUsuario($id_usuario);

$smarty->assign("dato_usuario", $dato_usuario);
