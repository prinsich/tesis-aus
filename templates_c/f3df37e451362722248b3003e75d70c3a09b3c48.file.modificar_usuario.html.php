<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 18:41:40
         compiled from ".\templates\admin\modificar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:2315456e485c373ba02-62474177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3df37e451362722248b3003e75d70c3a09b3c48' => 
    array (
      0 => '.\\templates\\admin\\modificar_usuario.html',
      1 => 1457818898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2315456e485c373ba02-62474177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e485c37db9e1_52304673',
  'variables' => 
  array (
    'dato_usuario' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e485c37db9e1_52304673')) {function content_56e485c37db9e1_52304673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_perfiles')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_perfiles.php';
?><?php echo '<script'; ?>
 language="javascript" type="text/javascript">

$(document).ready(function () {
      $("#guardar").click(function() {
          if(validar()){
              $("#formModificarUsuario").submit();
          }
      });

      function validar() {
          var valido = true;
          var error = "Por favor complete los siguiente campos: <br />";

          var usr = $("#user").val();
          if (usr.trim() === "") {
              valido = false;
              error += " - DNI para el nombre de usuario<br />";
          }

          var perfil = $("#perfil").val();
          if (perfil === "00") {
              valido = false;
              error += " - Selecione un perfil<br />";
          }

          var apellido = $("#apellido").val();
          if (apellido.trim() === "") {
              valido = false;
              error += " - Apellido<br />";
          }

          var nombre = $("#nombre").val();
          if (nombre.trim() === "") {
              valido = false;
              error += " - Nombre<br />";
          }

          var domicilio = $("#domicilio").val();
          if (domicilio.trim() === "") {
              valido = false;
              error += " - Domicilio<br />";
          }

          var telefono = $("#telefono").val();
          if (telefono.trim() === "") {
              valido = false;
              error += " - Telefono y/o celular<br />";
          }

          var email = $("#email").val();
          if (email.trim() === "") {
              valido = false;
              error += " - Email<br />";
          }

          if(valido){
              return true;
          } else {
              $("#modal_alert").dialog("option", "title", "Guardar usuario");
              $("#modal_alert").html(error);
              $("#modal_alert").dialog("open");
              return false;
          }
      }

      $("#email").change(function() {
          var email = $(this).val();
          expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.trim() !== ""){
              if ( !expr.test(email) ){
                  $("#modal_alert").dialog("option", "title", "Email");
                  $("#modal_alert").html("La direccion de correo " + email + " es incorrecta.");
                  $("#modal_alert").dialog("open");
                  $(this).val("");
              }
          }
      });
});

<?php echo '</script'; ?>
>

<h1>Agregar Usuario</h1>

<form autocomplete="off" name="formModificarUsuario" id="formModificarUsuario" action="index.php?section=admin&sub=guardar_usuario" method="POST">
    <input type="hidden" id="accion" name="accion" value="modificar" />
    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['id_usuario'];?>
" />
    <input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />

    <h2>Datos de login</h2>

    <label for="user">Usuario:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombreusr'];?>
" disabled=""/>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombreusr'];?>
" id="user" name="user"/>
    <br />

    <label for="nombre">Perfil:</label>
    <?php echo smarty_function_html_perfiles(array('name'=>"perfil",'seleccionar'=>$_smarty_tpl->tpl_vars['dato_usuario']->value['id_perfil']),$_smarty_tpl);?>

    <br />

    <h2>Datos Personales</h2>
    <label for="apellido">Apellido:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['apellido'];?>
" id="apellido" name="apellido"   />
    <br />

    <label for="nombre">Nombres:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['nombre'];?>
" id="nombre" name="nombre"  />
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['domicilio'];?>
" id="domicilio" name="domicilio"  />
    <br />

    <label for="telefono">Tel&eacute;fono de contacto:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['telefono'];?>
" id="telefono" name="telefono" class="numeros"/>
    <br />

    <label for="email">Email:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dato_usuario']->value['email'];?>
" id="email" name="email" />
    <br />

    <div align="center">
        <button class="btnSubmit2" type="button" name="guardar" id="guardar">Guardar</button>
        <button class="btnSubmit2" type="button" name="volver" id="volver">Volver</button>
    </div>
</form>
<?php }} ?>
