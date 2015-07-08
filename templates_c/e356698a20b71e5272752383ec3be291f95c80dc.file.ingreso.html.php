<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-26 23:47:36
         compiled from ".\templates\login\ingreso.html" */ ?>
<?php /*%%SmartyHeaderCode:23882558dc878872861-51816279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e356698a20b71e5272752383ec3be291f95c80dc' => 
    array (
      0 => '.\\templates\\login\\ingreso.html',
      1 => 1430882381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23882558dc878872861-51816279',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558dc878937058_33188703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558dc878937058_33188703')) {function content_558dc878937058_33188703($_smarty_tpl) {?><?php echo '<script'; ?>
>

//Esta linea llama a la funcion InicializarEventos
    addEvent(window, 'load', inicializarEventos, false);

    function inicializarEventos(){
        // Aqui se obtien mediante DOM el control a traves de ID 
        var ob1 = document.getElementById('usr');
        var ob2 = document.getElementById('password');

        // Se le agrega al objeto el evento (keypress), y la funcion que se va a ejecutar al presionar cualquie tecla...('presionar')
        addEvent(ob1, 'keypress', presionar, false);
        addEvent(ob2, 'keypress', presionar, false);
    }

    function presionar(e){
        if (e) {
            if (e.which == 13) {
                document.getElementById("login").submit();
            }
        }
    }

    function addEvent(elemento, nomevento, funcion, captura) {
        if (elemento.addEventListener){
            elemento.addEventListener(nomevento, funcion, captura);
            return true;
        }
        else
            return false;
    }

<?php echo '</script'; ?>
>

<h1>Acceso al Sistema [login]</h1>

<form id="login" method="post" action="index.php?section=login&sub=process-login" >
    <label for="usr">Usuario:</label>
    <input type="text" value="" id="usr" name="usr" />
    <br />

    <label for="password">Contrase&ntilde;a:</label>
    <input type="password" value="" id="password" name="password" />
    <br />

    <input class="btnSubmit" type="button" name="login" value="Acceder" onclick="submit();">
</form><?php }} ?>
