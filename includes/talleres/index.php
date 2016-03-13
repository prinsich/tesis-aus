<?php
$archivo = $sub.".php";
if (file_exists("includes/talleres/".$archivo)) {
    include ("includes/talleres/".$archivo );
}
