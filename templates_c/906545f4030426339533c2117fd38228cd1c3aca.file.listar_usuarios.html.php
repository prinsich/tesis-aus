<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 22:03:41
         compiled from ".\templates\admin\listar_usuarios.html" */ ?>
<?php /*%%SmartyHeaderCode:11791577c58ed782649-58794011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906545f4030426339533c2117fd38228cd1c3aca' => 
    array (
      0 => '.\\templates\\admin\\listar_usuarios.html',
      1 => 1467756949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11791577c58ed782649-58794011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cantidad_usuarios' => 0,
    'lista_usuarios' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c58ed93efc0_09333189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c58ed93efc0_09333189')) {function content_577c58ed93efc0_09333189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\function.counter.php';
?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {

        $("[name='ver_usuario']").click(function () {
            var id_usuario = $(this).data("id");
            var urlp = "index.php?section=admin&sub=ver_usuario&id_usuario=" + id_usuario;
            window.open(urlp, "_self");
        });

        $("[name='modificar_usuario']").click(function () {
            var id_usuario = $(this).data("id");
            var urlp = "index.php?section=admin&sub=modificar_usuario&id_usuario=" + id_usuario;
            window.open(urlp, "_self");
        });

        $("[name='alta_usuario']").click(function () {
            var id_usuario = $(this).data("id");
            $("#modal_confirm").dialog("option", "title", "Alta de alumno");
            $("#modal_confirm").html("&iquest;Est&aacute; seguro que desea dar de alta este alumno?");
            $("#modal_confirm").dialog("open");

            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: "includes/admin/ajax_admin.php?funcion=alta_usuario",
                        data: {
                            id_usuario: id_usuario,
                            usrlogin: $("#usrlogin").val(),
                        }
                    })
                            .done(function (data, textStatus, jqXHR) {
                                $("#modal_alert").dialog("option", "title", "Alta de alumno");
                                if (data.success) {
                                    $("#modal_alert").html("El usuario fue dado de alta");
                                } else {
                                    $("#modal_alert").html("El usuario no posee id valido");
                                }
                                $("#modal_alert").dialog("open");
                            })
                            .fail(function (jqXHR, textStatus, errorThrown) {
                                if (console && console.log) {
                                    console.log("La solicitud a fallado: " + textStatus);
                                    console.log(jqXHR + " # " + errorThrown);
                                }
                            });
                },
                "NO": function () {
                    $(this).dialog("close");
                }
            });
        });

        $("[name='baja_usuario']").click(function () {
            var id_usuario = $(this).data("id");
            $("#modal_confirm").dialog("option", "title", "Baja de alumno");
            $("#modal_confirm").html("&iquest;Est&aacute; seguro que desea dar de baja este alumno?");
            $("#modal_confirm").dialog("open");

            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: "includes/admin/ajax_admin.php?funcion=baja_usuario",
                        data: {
                            id_usuario: id_usuario,
                            usrlogin: $("#usrlogin").val(),
                        }
                    })
                            .done(function (data, textStatus, jqXHR) {
                                $("#modal_alert").dialog("option", "title", "Baja de alumno");
                                if (data.success) {
                                    $("#modal_alert").html("El usuario fue dado de baja");
                                } else {
                                    $("#modal_alert").html("El usuario no posee id valido");
                                }
                                $("#modal_alert").dialog("open");
                            })
                            .fail(function (jqXHR, textStatus, errorThrown) {
                                if (console && console.log) {
                                    console.log("La solicitud a fallado: " + textStatus);
                                    console.log(jqXHR + " # " + errorThrown);
                                }
                            });
                },
                "NO": function () {
                    $(this).dialog("close");
                }
            });
        });

        //Set botones alert
        $("#modal_alert").dialog("option", "buttons", {
            "Acpetar": function () {
                window.location.reload();
            }
        });
    });
<?php echo '</script'; ?>
>

<h1>Usuarios</h1>
<div id="capa_datos">
    <p>Cantidad total de usuarios <?php echo $_smarty_tpl->tpl_vars['cantidad_usuarios']->value;?>
</p>
    <table class="zebra-striped" id="sortTableExample">
        <thead>
            <tr>
                <th>#</th>
                <th>Userlogin</th>
                <th>Perfil</th>
                <th>Apellido</th>
                <th>Nombres</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['u'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['u']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['name'] = 'u';
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_usuarios']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total']);
?>
            <tr>
                <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['nombreusr'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['perfil'];?>
</td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['apellido']);?>
</td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['nombre']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado'];?>
</td>
                <td>
                    <img name="ver_usuario" src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
" />
                    <img name="modificar_usuario" src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado']=="ACTIVO") {?>
                        <img name="baja_usuario" src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
"/>
                    <?php } else { ?>
                        <img name="alta_usuario" src="images/icons/file_add.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
"/>
                    <?php }?>
                </td>
            </tr>
            <?php endfor; endif; ?>
        </tbody>
    </table>
</div>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" id="usrlogin" name="usrlogin"/>
<?php }} ?>
