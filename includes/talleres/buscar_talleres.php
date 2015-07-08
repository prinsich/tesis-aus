<?php
include_once("includes/talleres/ajax.php");
$lista_dias = $db->getAll("SELECT * FROM dias");
$smarty->assign("lista_dias", $lista_dias);
?>

