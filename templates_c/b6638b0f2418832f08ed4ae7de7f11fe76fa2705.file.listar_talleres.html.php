<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 01:13:18
         compiled from ".\templates\talleres\listar_talleres.html" */ ?>
<?php /*%%SmartyHeaderCode:12752567efcd47b8838-01156082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6638b0f2418832f08ed4ae7de7f11fe76fa2705' => 
    array (
      0 => '.\\templates\\talleres\\listar_talleres.html',
      1 => 1457928795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12752567efcd47b8838-01156082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567efcd49f2d23_50900674',
  'variables' => 
  array (
    'cantidad_talleres' => 0,
    'estado' => 0,
    'lista_talleres' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567efcd49f2d23_50900674')) {function content_567efcd49f2d23_50900674($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\function.counter.php';
?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $("[name='ver_taller']").click(function () {
            var id_taller = $(this).data("id");
            var urlp = "index.php?section=talleres&sub=ver_taller&id_taller=" + id_taller;
            window.open(urlp, "_self");
        });

        $("[name='modificar_taller']").click(function () {
            var id_taller = $(this).data("id");
            var urlp = "index.php?section=talleres&sub=modificar_taller&id_taller=" + id_taller;
            window.open(urlp, "_self");
        });

        $("[name='alta_taller']").click(function () {
            var id_taller = $(this).data("id");

            $("#modal_confirm").dialog("option", "title", "Alta de taller");
            $("#modal_confirm").html("Esta seguro que desea dar de alta este taller?");
            $("#modal_confirm").dialog("open");

            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: "includes/talleres/ajax_talleres.php?funcion=alta_taller",
                        data: {
                            id_taller: id_taller,
                            usrlogin: $("#usrlogin").val()
                        }
                    })
                    .done(function (data, textStatus, jqXHR) {
                        $("#modal_alert").dialog("option", "title", "Alta de taller");
                        if (data.success) {
                            if(data.direct_alta){
                                $("#modal_alert").html(data.msj);
                            } else {
                                $("#modal_alert").html(data.msj);
                                $("#modal_alert").dialog("option", "buttons", {
                                    "Acpetar": function () {
                                        var urlp = "index.php?section=talleres&sub=modificar_taller&id_taller=" + data.id_taller;
                                        window.open(urlp, "_self");
                                    }
                                });


                            }
                        } else {
                            $("#modal_alert").html(data.msj)
                        }
                        $("#modal_alert").dialog("open");
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        if (console && console.log) {
                            console.log("La solicitud a fallado: " + textStatus);
                            console.log(jqXHR + " # " + errorThrown);
                        }
                    });
                    $(this).dialog("close");
                },
                "NO": function () {
                    $(this).dialog("close");
                }
            });
        });

        $("[name='baja_taller']").click(function () {
            var id_taller = $(this).data("id");

            $("#modal_confirm").dialog("option", "title", "Baja de taller");
            $("#modal_confirm").html("Esta seguro que desea dar de baja este taller?");
            $("#modal_confirm").dialog("open");

            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: "includes/talleres/ajax_talleres.php?funcion=baja_taller",
                        data: {
                            id_taller: id_taller,
                            usrlogin: $("#usrlogin").val()
                        }
                    })
                    .done(function (data, textStatus, jqXHR) {
                        $("#modal_alert").dialog("option", "title", "Baja de taller");
                        if (data.success) {
                            $("#modal_alert").html("El taller fue dado de baja");
                        } else {
                            $("#modal_alert").html("El taller no posee id valido");
                        }
                        $("#modal_alert").dialog("open");
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        if (console && console.log) {
                            console.log("La solicitud a fallado: " + textStatus);
                            console.log(jqXHR + " # " + errorThrown);
                        }
                    });
                    $(this).dialog("close");
                },
                "NO": function () {
                    $(this).dialog("close");
                }
            });
        });

        $("[name='resetear_taller']").click(function () {
            var id_taller = $(this).data("id");

            $("#modal_confirm").dialog("option", "title", "Reset de taller");
            $("#modal_confirm").html("Esta seguro que desea resetear este taller?");
            $("#modal_confirm").dialog("open");


            //Set botones confirmar
            $("#modal_confirm").dialog("option", "buttons", {
                "SI": function () {
                    $.ajax({
                        method: "POST",
                        dataType: "json",
                        url: "includes/talleres/ajax_talleres.php?funcion=reset_taller",
                        data: {
                            id_taller: id_taller,
                            usrlogin: $("#usrlogin").val(),
                        }
                    })
                            .done(function (data, textStatus, jqXHR) {
                                $("#modal_alert").dialog("option", "title", "Reset de taller");
                                if (data.success) {
                                    $("#modal_alert").html("El taller fue reiniciado");
                                } else {
                                    $("#modal_alert").html("El taller no posee id valido");
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
                $(this).dialog("close");
                window.location.reload();
            }
        });
    });
<?php echo '</script'; ?>
>

<h1>Talleres</h1>
<form autocomplete="off" id="formListartaller" name="formListartaller" action="index.php?section=talleres&sub=listar_talleres" method="POST">

    <p>Cantidad de Talleres: <?php echo $_smarty_tpl->tpl_vars['cantidad_talleres']->value;?>
<br />
    Estado:
    <input type="hidden" value="" name="nombre" id="nombre"/>
    <input type="hidden" value="" name="id_capacitador" id="id_capacitador"/>

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
    <button type="submit" form="formListartaller" value="filtrar">Filtrar</button>
    </p>
</form>
<div id="listado">
    <table class="zebra-striped" id="sortTableExample">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Capacitador</th>
                <th>Cantidad de Alumnos</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_talleres']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
            <tr>
                <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['capacitador'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['cant_alumnos'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['estado'];?>
</td>
                <td>
                    <img name="ver_taller" src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['estado']=="ACTIVO") {?>
                    <img name="modificar_taller"  src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
" />
                    <img name="baja_taller"  src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
"/>
                    <img name="resetear_taller"  src="images/icons/file_warning.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
"/>
                    <?php } else { ?>
                    <img name="alta_taller"  src="images/icons/file_add.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
"/>
                    <?php }?>
                </td>
            </tr>
            <?php endfor; endif; ?>
        </tbody>
    </table>
</div>
<input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" />
<?php }} ?>
