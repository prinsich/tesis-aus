
<?php
//echo php_uname();
echo PHP_OS;

/* Algúnos posibles resultados:
Linux localhost 2.4.21-0.13mdk #1 Fri Mar 14 15:08:06 EST 2003 i686
Linux

FreeBSD localhost 3.2-RELEASE #15: Mon Dec 17 08:46:02 GMT 2001
FreeBSD

Windows NT XN1 5.1 build 2600
WINNT
*/

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo 'Este un servidor usando Windows!';
} else {
    echo 'Este es un servidor que no usa Windows!';
}

?>
