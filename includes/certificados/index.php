<?php

if($sub == "imprimir"){
    $sub = "certificado";
}

$archivo = $sub.".php"; 
include ("includes/certificados/".$archivo );  	
?>