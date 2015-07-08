<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-05 10:39:59
         compiled from ".\templates\admin\agregar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:1020755919518a68e07-82351818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27cee7505766d384ae9a26ec2099667d57e8fecd' => 
    array (
      0 => '.\\templates\\admin\\agregar_usuario.html',
      1 => 1436103597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020755919518a68e07-82351818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55919518af5d67_81056617',
  'variables' => 
  array (
    'Sajax' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55919518af5d67_81056617')) {function content_55919518af5d67_81056617($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_perfiles')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_perfiles.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    function validar() {
        
        var valido = true;
        var error = "Por favor complete los siguiente campos: \n";
        
        var usr = document.getElementById("user").value;
        if (usr.trim() === "") {
            valido = false;
            error += " - DNI para el nombre de usuario\n";
        }        
        
        var perfil = document.getElementById("perfil").value;
        if (perfil === "00") {
            valido = false;
            error += " - Selecione un perfil\n";
        }        
              
        var apellido = document.getElementById("apellido").value;
        if (apellido.trim() === "") {
            valido = false;
            error += " - Apellido\n";
        }

        var nombre = document.getElementById("nombre").value;
        if (nombre.trim() === "") {
            valido = false;
            error += " - Nombre\n";
        }
        
        var domicilio = document.getElementById("domicilio").value;
        if (domicilio.trim() === "") {
            valido = false;
            error += " - Domicilio\n";
        }

        var telefono = document.getElementById("telefono").value;
        if (telefono.trim() === "") {
            valido = false;
            error += " - Telefono y/o celular\n";
        }
        
        var email = document.getElementById("email").value;
        if (email.trim() === "") {
            valido = false;
            error += " - Email\n";
        }

        if(!valido){
            alert(error);
        }
        
        return valido;
    }
    
    function validarEmail() {
        var email = document.getElementById("email").value;
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email.trim() !== ""){
            if ( !expr.test(email) ){
                alert("La direcci\u00F3n de correo " + email + " es incorrecta.");
            }
        }
    }
    
    function buscar_usuario(){
        
        var usr = document.getElementById("user").value;
        x_buscar_usuario(usr, buscar_usuario_cb);
        return true;
        
    }
    
    var nuevo_user = true;
    function buscar_usuario_cb(z){
        if(z === 0){
            alert("El usuario ya existe");
            nuevo_user = false;
        }
    }
         
    function guardar(){
        
        var valido = validar();
        buscar_usuario();
                
        if(valido && nuevo_user){
            document.forms[0].submit();
        }
    }
    
    
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/date/datetimepicker_css.js"><?php echo '</script'; ?>
>

<h1>Agregar Usuario</h1>

<form autocomplete="off" name="formCapacitador" action="index.php?section=admin&sub=guardar_usuario" method="POST">
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
    <input type="hidden" id="new_pass" name="new_pass" value="SI" />
    
    <h2>Datos de login</h2>
    <label for="user">Nombre de usuario: (use el dni de la persona)</label>
    <input type="text" value="" id="user" name="user" />
    <br />

    <label></label>
    <br />
    
    <label for="perfil">Perfil:</label>
    <?php echo smarty_function_html_perfiles(array('name'=>"perfil"),$_smarty_tpl);?>

    <br />
    
    <h2>Datos Personales</h2>
    <label for="apellido">Apellido:</label>
    <input type="text" value="" id="apellido" name="apellido" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <label for="nombre">Nombres:</label>
    <input type="text" value="" id="nombre" name="nombre" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" value="" id="domicilio" name="domicilio" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <label for="telefono">Tel&eacute;fono de contacto:</label>
    <input type="text" value="" id="telefono" name="telefono" class="numeros" />
    <br />
    
    <label for="email">Email:</label>
    <input type="text" value="" id="email" name="email" onblur="validarEmail()" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <div align="center">
        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
        <input class="btnSubmit2" type="button" name="volver" value="Volver" onclick="history.back();">
    </div>
</form>
<?php }} ?>
