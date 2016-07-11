<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 21:41:50
         compiled from ".\templates\capacitadores\listar_capacitadores.html" */ ?>
<?php /*%%SmartyHeaderCode:14286577c53cee24295-44707155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fdb8a57ac41d563ecaa203baf1a9dfc8e88f9d' => 
    array (
      0 => '.\\templates\\capacitadores\\listar_capacitadores.html',
      1 => 1467753697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14286577c53cee24295-44707155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cantidad_capacitadores' => 0,
    'estado' => 0,
    'lista_capacitadores' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c53cf2a69f5_69195283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c53cf2a69f5_69195283')) {function content_577c53cf2a69f5_69195283($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\function.counter.php';
?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {

        $("[name='ver_capacitador']").click(function () {
            var id_capacitador = $(this).data("id");
            var urlp = "index.php?section=capacitadores&sub=ver_capacitador&id_capacitador=" + id_capacitador;
            window.open(urlp, "_self");
        });

        $("[name='modificar_capacitador']").click(function () {
            var id_capacitador = $(this).data("id");
            var urlp = "index.php?section=capacitadores&sub=modificar_capacitador&id_capacitador=" + id_capacitador;
            window.open(urlp, "_self");
        });

        $("[name='alta_capacitador']").click(function () {
            var id_capacitador = $(this).data("id");
            $("#modal_confirm").dialog("option", "title", "Alta de capacitador");
            $("#modal_confirm").html("&iquest;Est&aacute; seguro que desea dar de alta este capacitador?");
            $("#modal_confirm").dialog("open");

            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: "includes/capacitadores/ajax_capacitadores.php?funcion=alta_capacitador",
                        data: {
                            id_capacitador: id_capacitador,
                            usrlogin: $("#usrlogin").val()
                        }
                    })
                            .done(function (data, textStatus, jqXHR) {
                                $("#modal_alert").dialog("option", "title", "Alta de capacitadores");
                                if (data.success) {
                                    $("#modal_alert").html("El capacitador fue dado de alta");
                                } else {
                                    $("#modal_alert").html("El capacitador no posee id valido");
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

        $("[name='baja_capacitador']").click(function () {
            var id_capacitador = $(this).data("id");
            $("#modal_confirm").dialog("option", "title", "Baja de capacitador");
            $("#modal_confirm").html("&iquest;Est&aacute; seguro que desea dar de baja este capacitador?");
            $("#modal_confirm").dialog("open");

            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: "includes/capacitadores/ajax_capacitadores.php?funcion=baja_capacitador",
                        data: {
                            id_capacitador: id_capacitador,
                            usrlogin: $("#usrlogin").val()
                        }
                    })
                            .done(function (data, textStatus, jqXHR) {
                                $("#modal_alert").dialog("option", "title", "Baja de capacitador");
                                if (data.success) {
                                    $("#modal_alert").html("El capacitador fue dado de baja");
                                } else {
                                    $("#modal_alert").html("El capacitador no posee id valido");
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

<h1>Capacitadores</h1>
<form autocomplete="off" id="formListarCapacitadores" name="formListarCapacitadores" action="index.php?section=capacitadores&sub=listar_capacitadores" method="POST">

    <p>Cantidad total de capacitadores <?php echo $_smarty_tpl->tpl_vars['cantidad_capacitadores']->value;?>
<br />
        Estado:
        <input type="hidden" value="" name="apellido" id="nombre"/>
        <input type="hidden" value="" name="nombre" id="apellido"/>
        <input type="hidden" value="" name="dni" id="dni"/>

        <select id="estado" name="estado">
            <?php if ($_smarty_tpl->tpl_vars['estado']->value=="ACTIVO") {?>
            <option value=""> TODOS </option>
            <option value="ACTIVO" selected=""> ACTIVO </option>
            <option value="INACTIVO"> INACTIVO </option>
            <?php } elseif ($_smarty_tpl->tpl_vars['estado']->value=="INACTIVO") {?>
            <option value=""> TODOS </option>
            <option value="ACTIVO"> ACTIVO </option>
            <option value="INACTIVO" selected=""> INACTIVO </option>
            <?php } else { ?>
            <option value="" selected=""> TODOS </option>
            <option value="ACTIVO"> ACTIVO </option>
            <option value="INACTIVO"> INACTIVO </option>
            <?php }?>
        </select>
        <button type="submit" form="formListarCapacitadores" value="filtrar">Filtrar</button>
    </p>
</form>

<table class="zebra-striped" id="sortTableExample">
    <thead>
        <tr>
            <th>#</th>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>Tel&eacute;fono</th>
            <th>Celular</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_capacitadores']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
        <tr>
            <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
            <td><?php echo strtoupper($_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['apellido']);?>
</td>
            <td><?php echo strtoupper($_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['nombre']);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['telefono'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['celular'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['estado'];?>
</td>
            <td>
                <img name="ver_capacitador" src="images/icons/file_search.png" title="Ver capacitador" alt="Ver capacitador" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
" />
                <?php if ($_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['estado']=="ACTIVO") {?>
                <img name="modificar_capacitador" src="images/icons/file_edit.png" title="Modificar capacitador" alt="Modificar capacitador" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
" />
                <img name="baja_capacitador" src="images/icons/file_delete.png" title="baja capacitador" alt="Baja capacitador" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
" />
                <?php } else { ?>
                <img name="alta_capacitador" src="images/icons/file_add.png" title="Alta capacitador" alt="Alta capacitador" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
" />
                <?php }?>
            </td>
        </tr>
        <?php endfor; endif; ?>
    </tbody>
</table>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" id="usrlogin" name="usrlogin"/>
<?php }} ?>
