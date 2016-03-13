<?php

if($sub == "imprimir"){
    $sub = "certificado";
}

$archivo = $sub.".php";
if (file_exists("includes/certificados/".$archivo)) {
    include ("includes/certificados/".$archivo );
}
