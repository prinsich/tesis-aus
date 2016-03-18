<?php
/**
 * Función para detectar el sistema operativo, navegador y versión del mismo
 * Funcion que devuelve un array con los valores:
 *	os => sistema operativo
 *	browser => navegador
 *	version => version del navegador.
 */
function detect_os_and_browser()
{
    $browser = array('IE', 'OPERA', 'MOZILLA', 'NETSCAPE', 'FIREFOX', 'SAFARI', 'CHROME');
    $os = array('WIN', 'MAC', 'LINUX');

    # definimos unos valores por defecto para el navegador y el sistema operativo
    $info['browser'] = 'OTHER';
    $info['os'] = 'OTHER';

    # buscamos el navegador con su sistema operativo
    foreach ($browser as $parent) {
        $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
        $f = $s + strlen($parent);
        $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
        $version = preg_replace('/[^0-9,.]/', '', $version);
        if ($s) {
            $info['browser'] = $parent;
            $info['version'] = $version;
        }
    }

    # obtenemos el sistema operativo
    foreach ($os as $val) {
        if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $val) !== false) {
            $info['os'] = $val;
        }
    }

    # devolvemos el array de valores
    return $info;
}

/* BUSCA POSIBLES CADENAS REALCIONADAS CON EL SQL Y LAS ELIMINA PARA EVIAR EL SQL INYECTION */
function sqlInyectionCheck($valor)
{
    $valor_length_org = strlen($valor);

    $valor = str_ireplace('SELECT', '', $valor);
    $valor = str_ireplace('FROM', '', $valor);
    $valor = str_ireplace('WHERE', '', $valor);
    $valor = str_ireplace('COPY', '', $valor);
    $valor = str_ireplace('DELETE', '', $valor);
    $valor = str_ireplace('DROP', '', $valor);
    $valor = str_ireplace('TRUNCATE', '', $valor);
    $valor = str_ireplace('DUMP', '', $valor);
    $valor = str_ireplace(' OR ', '', $valor);
    $valor = str_ireplace('%', '', $valor);
    $valor = str_ireplace('LIKE', '', $valor);
    $valor = str_ireplace('--', '', $valor);
    $valor = str_ireplace('^', '', $valor);
    $valor = str_ireplace('[', '', $valor);
    $valor = str_ireplace(']', '', $valor);
    $valor = str_ireplace('!', '', $valor);
    $valor = str_ireplace('¡', '', $valor);
        //$valor = str_ireplace("?","",$valor);
        //$valor = str_ireplace("=","",$valor);
        //$valor = str_ireplace("&","",$valor);

        $valor_length_asfter_check = strlen($valor);
    if ($valor_length_org == $valor_length_asfter_check) {
        return true;
    } else {
        return false;
    }
}

function getClientIP()
{
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
        return  $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (array_key_exists('REMOTE_ADDR', $_SERVER)) {
        return $_SERVER['REMOTE_ADDR'];
    } elseif (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    return '';
}

//------------------------------------------------------------------------------
//CHECK SQL INYECTION
//------------------------------------------------------------------------------
function sql_inyection_ajax($datos_post, $log, $ajax_file)
{
    $sql_inyection = false;

    if (!empty($datos_post)) {
        foreach ($datos_post as $dato) {
            if (!is_array($dato)) {
                if (!sqlInyectionCheck($dato)) {
                    $sql_inyection = true;
                    break;
                }
            } else {
                foreach ($dato as $metadato) {
                    if (!sqlInyectionCheck($metadato)) {
                        $sql_inyection = true;
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
    if ($sql_inyection) {
        //------------------------------------------------------------------------------
        // REGISTRO EN EL LOG
        //------------------------------------------------------------------------------
        $obs = "Intento de sql inyection en $ajax_file. IP: ".getClientIP();
        $log->crear_registro('', 'SQL inyection', 'AJAX', '', $obs);

        return true;
    }

    return false;
}
