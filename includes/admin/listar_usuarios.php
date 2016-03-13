<?php
include_once("classes/class.Usuarios.php");
$usuario = new Usuarios($db);

$lista_usuarios = null;
$datos = filter_input_array(INPUT_POST);

if(empty($datos)){
    $lista_usuarios = $usuario->listar_usuarios();
} else {
    $lista_usuarios = $usuario->buscar_usuarios($datos["apellido"], $datos["nombre"], $datos["dni"], $datos["estado"]);
}

$smarty->assign("cantidad_usuarios", count($lista_usuarios));
$smarty->assign("lista_usuarios", $lista_usuarios);
$smarty->assign("usrlogin", $usrlogin);
