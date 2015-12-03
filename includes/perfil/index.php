<?php

if($sub == "ver"){
    $sub = "ver_perfil";
}

$archivo = $sub.".php";
include ("includes/perfil/".$archivo );