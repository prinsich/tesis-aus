<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 18:07:57
         compiled from ".\templates\admin\modificar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:209795591de12560172-35179511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3df37e451362722248b3003e75d70c3a09b3c48' => 
    array (
      0 => '.\\templates\\admin\\modificar_usuario.html',
      1 => 1435693362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209795591de12560172-35179511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5591de126e2409_03237778',
  'variables' => 
  array (
    'dato_usuario' => 0,
    'userlog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5591de126e2409_03237778')) {function content_5591de126e2409_03237778($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_perfiles')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_perfiles.php';
?><?php echo '<script'; ?>
>
    
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
    
    function guardar(){
        
        var valido = validar();
                
        if(valido){
            document.forms[0].submit();
        }
    }
    
    
<?php echo '</script'; ?>
>

<h1>Agregar Usuario</h1>

<form name="formCapacitador" action="index.php?section=admin&sub=guardar_usuario" method="POST">
    <input type="hidden" id="accion" name="accion" value="modificar" />
    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['id_usuario'];?>
" />
    <input type="hidden" id="userlog" name="userlog" value="<?php echo $_smarty_tpl->tpl_vars['userlog']->value;?>
" />
    
    <h2>Datos de login</h2>
    
    <label for="user">Usuario:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['userlogin'];?>
" disabled=""/>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['userlogin'];?>
" id="user" name="user"/>
    <br />

    <label for="nombre">Perfil:</label>
    <?php echo smarty_function_html_perfiles(array('name'=>"perfil",'seleccionar'=>$_smarty_tpl->tpl_vars['dato_usuario']->value['id_perfil']),$_smarty_tpl);?>

    <br />
    
    <label for="new_pass">Nueva Contrase&ntilde;a:</label>
    <span class="diascheck">
        <input type="radio" id="new_pass_si" name="new_pass" value="SI" />SI<br />
        <input type="radio" id="new_pass_no" name="new_pass" value="NO" checked=""/>NO<br />
    </span>
    <br />
    
    <h2>Datos Personales</h2>
    <label for="apellido">Apellido:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['apellido'];?>
" id="apellido" name="apellido" onkeyup="this.value = this.value.toUpperCase();" />
    <br />
    
    <label for="nombre">Nombres:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombre'];?>
" id="nombre" name="nombre" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['domicilio'];?>
" id="domicilio" name="domicilio" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />

    <label for="telefono">Tel&eacute;fono de contacto:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['telefono'];?>
" id="telefono" name="telefono" class="numeros"/>
    <br />
    
    <label for="email">Email:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['email'];?>
" id="email" name="email" onblur="validarEmail()" onkeyup="this.value = this.value.toUpperCase();"/>
    <br />
    
    <div align="center">
        <input class="btnSubmit2" type="button" name="save" value="Guardar" onclick="guardar();" />
        <input class="btnSubmit2" type="button" name="volver" value="volver" onclick="history.back();">
    </div>
</form>
<?php }} ?>
