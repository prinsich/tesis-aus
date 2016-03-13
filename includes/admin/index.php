<?php
$archivo = $sub.".php";
if (file_exists("includes/admin/".$archivo)) {
    include ("includes/admin/".$archivo );
}
