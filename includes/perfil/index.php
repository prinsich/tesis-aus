<?php

if($sub == "ver"){
    $sub = "ver_perfil";
}

$archivo = $sub.".php";
if (file_exists("includes/perfil/".$archivo)) {
    include ("includes/perfil/".$archivo );
}
