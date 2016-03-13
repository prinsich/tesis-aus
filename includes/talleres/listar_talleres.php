<?php
include_once("classes/class.Talleres.php");
$taller = new Talleres($db);

$lista_talleres = null;
$datos = filter_input_array(INPUT_POST);

if(empty($datos)){
    $lista_talleres = $taller->listar_talleres();
    $smarty->assign("estado",  "");
} else {
    $lista_talleres = $taller->buscar_talleres($datos["nombre"], $datos["id_capacitador"], $datos["estado"]);
    $smarty->assign("estado",  $datos["estado"]);
}

$cantidad_alumnos_taller = $taller->cantidad_alumnos_por_taller();

$smarty->assign("cantidad_talleres", count($lista_talleres));
$smarty->assign("lista_talleres", $lista_talleres);
$smarty->assign("cantidad_alumnos_taller", $cantidad_alumnos_taller);
?>
