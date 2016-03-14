<?php
session_start();
require ("configs/Smarty.php");
require ("configs/db.php");
require ("configs/auxiliar_function.php");
include_once("classes/class.Log.php");

header('Content-Type: text/html; charset=UTF-8');

//------------------------------------------------------------------------------
//CHECK BROWSER - ONLY ADMIT FIREFOX OR CHORME
//------------------------------------------------------------------------------
$Firefox = strpos($_SERVER['HTTP_USER_AGENT'], "Firefox");
$Chrome = strpos($_SERVER['HTTP_USER_AGENT'], "Chrome");

if(is_int($Chrome) || is_int($Firefox)){

    //------------------------------------------------------------------------------
    //CHECK DIRECTORIO INDEX.PHP
    //------------------------------------------------------------------------------
    $section = (isset($_GET["section"])) ? $_GET["section"] : "";
    $sub = (isset($_GET["sub"])) ? $_GET["sub"] : "";

    //------------------------------------------------------------------------------
    //LOGIN REQUIERED
    //------------------------------------------------------------------------------
    $login_requiered = array("home", "alumnos", "capacitadores", "talleres", "certificados", "admin", "perfil");
    $login_not_requiered = array("login", "logout");

    //------------------------------------------------------------------------------
    //REDIRECCION SEGUN SECTIONS AND SUB
    //------------------------------------------------------------------------------
    if(($section == "") && ($sub == "")){
        //limpiamos los GET, POST y session_unset
        unset($_GET);
        unset($_POST);
        unset($_SESSION);

        //destruye sesion si hay
        session_unset();
        session_destroy();
        session_start();

        //variables globales en null
        $logueado = false;
        $usrlogin = "";
        $usrperfil = "";

        //enviamos a login_requiered
        $section = "login";
        $sub = "acceso";

    } else if(in_array($section, $login_requiered)){
        if (isset($_SESSION['logged_in'])) {
            $logueado = true;
            $usrlogin = $_SESSION['usr'];
            $usrperfil = $_SESSION['perfil'];

        } else {
            //limpiamos los GET, POST y session_unset
            unset($_GET);
            unset($_POST);
            unset($_SESSION);

            //destruye sesion si hay
            session_unset();
            session_destroy();
            session_start();

            //variables globales en null
            $section = "";
            $sub = "";

            $logueado = false;
            $usrlogin = "";
            $usrperfil = "";
        }
    } else if(in_array($section, $login_not_requiered)){
        if ($section == "login") {
            if ($sub != "acceso" && $sub != "lost_password") {
                $sub = "acceso";
            }

            $logueado = false;
            $usrlogin = "";
            $usrperfil = "";

        } else if ($section == "logout") {
            //limpiamos los GET, POST y session_unset
            unset($_GET);
            unset($_POST);
            unset($_SESSION);

            //destruye sesion si hay
            session_unset();
            session_destroy();
            session_start();

            //variables globales en null
            $section = "";
            $sub = "";

            $logueado = false;
            $usrlogin = "";
            $usrperfil = "";
        }

    } else {
        //limpiamos los GET, POST y session_unset
        unset($_GET);
        unset($_POST);
        unset($_SESSION);

        //destruye sesion si hay
        session_unset();
        session_destroy();
        session_start();

        //variables globales en null
        $logueado = false;
        $usrlogin = "";
        $usrperfil = "";

        $section = "acceso";
        $sub = "denegado";
    }

    //------------------------------------------------------------------------------
    //CHECK SQL INYECTION
    //------------------------------------------------------------------------------
    $sql_inyection = false;
    $inyection_in = "";
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $datos_post = filter_input_array(INPUT_POST);

    /*sqlInyectionCheck retorna true si no hay inyections, de lo contrario false*/
    if(!sqlInyectionCheck($url)){
        $sql_inyection = true;
        $inyection_in .= "URL - GET";
    }

    if($inyection_in != ""){
        $inyection_in .= " - ";
    }

    if(!empty($datos_post)){
        foreach ($datos_post as $dato) {
            if(!is_array($dato)){
                if(!sqlInyectionCheck($dato)){
                    $sql_inyection = true;
                    $inyection_in .= "POST";
                    break;
                }
			} else {
				foreach ($dato as $metadato) {
					if(!sqlInyectionCheck($metadato)){
	                	$sql_inyection = true;
                        $inyection_in .= "POST";
	                	break;
	            	}
				}
			}
        }
    }

    /*
    * Si hay alguna inyection matamos la sesion y enviamos al login
    * Ademas guardamos quien fue con la fecha y la direccion ip local y publica en el log
    */
    if($sql_inyection){
        //------------------------------------------------------------------------------
        // REGISTRO EN EL LOG
        //------------------------------------------------------------------------------
        $log = new Log($db);
        $obs = "Intento de sql inyection en $inyection_in. IP: ".getClientIP();
        $log->crear_registro($usrlogin, "SQL inyection", $section."-".$sub, "", $obs);

        //limpiamos los GET, POST y session_unset
        unset($_GET);
        unset($_POST);
        unset($_SESSION);

        //destruye sesion si hay
        session_unset();
        session_destroy();
        session_start();

        //variables globales en null
        $logueado = false;
        $usrlogin = "";
        $usrperfil = "";

        $section = "acceso";
        $sub = "denegado";
    }

    //------------------------------------------------------------------------------
    //SEND TO SMARTY
    //------------------------------------------------------------------------------

    $smarty->assign("section", $section);
    $smarty->assign("sub", $sub);

    $smarty->assign("logueado", $logueado);
    $smarty->assign("usrlogin", $usrlogin);
    $smarty->assign("usrperfil", $usrperfil);

    if (file_exists("includes/" . $section . "/index.php")) {
        include ("includes/" . $section . "/index.php");
    }

    $smarty->display('index.html');

} else {
    $smarty->display('no_browser_admited.html');
}
