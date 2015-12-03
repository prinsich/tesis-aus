<?php
include_once("includes/talleres/ajax.php");
$lista_dias = $db->getAll("SELECT * FROM ".BASE_DATA.".dias WHERE id_dia != 0");
$smarty->assign("lista_dias", $lista_dias);
$smarty->assign("usrlogin", $usrlogin);

