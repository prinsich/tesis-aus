<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-06 09:30:52
         compiled from ".\templates\alumnos\listar_alumnos.html" */ ?>
<?php /*%%SmartyHeaderCode:7550577cf9fca01001-72704378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221bbca5a9b80213b72f67702b6d168feea0a125' => 
    array (
      0 => '.\\templates\\alumnos\\listar_alumnos.html',
      1 => 1467606626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7550577cf9fca01001-72704378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cantidad_alumnos' => 0,
    'estado' => 0,
    'lista_alumnos' => 0,
    'index' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577cf9fccc25e1_95791462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf9fccc25e1_95791462')) {function content_577cf9fccc25e1_95791462($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {

        $("[name='ver_alumno']").click(function () {
            var id_alumno = $(this).data("id");
            var urlp = "index.php?section=alumnos&sub=ver_alumno&id_alumno=" + id_alumno;
            window.open(urlp, "_self");
        });

        $("[name='modificar_alumno']").click(function () {
            var id_alumno = $(this).data("id");
            var urlp = "index.php?section=alumnos&sub=modificar_alumno&id_alumno=" + id_alumno;
            window.open(urlp, "_self");
        });

        $("[name='alta_alumno']").click(function () {
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
                        url: "includes/alumnos/ajax_alumno.php?funcion=alta_alumno",
                        data: {
                            id_alumno: id_usuario,
                            usrlogin: $("#usrlogin").val(),
                        }
                    })
                            .done(function (data, textStatus, jqXHR) {
                                $("#modal_alert").dialog("option", "title", "Alta de alumno");
                                if (data.success) {
                                    $("#modal_alert").html("El alumno fue dado de alta");
                                } else {
                                    $("#modal_alert").html("El alumno no posee id valido");
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

        $("[name='baja_alumno']").click(function () {
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
                        url: "includes/alumnos/ajax_alumno.php?funcion=baja_alumno",
                        data: {
                            id_alumno: id_usuario,
                            usrlogin: $("#usrlogin").val(),
                        }
                    })
                            .done(function (data, textStatus, jqXHR) {
                                $("#modal_alert").dialog("option", "title", "Baja de alumno");
                                if (data.success) {
                                    $("#modal_alert").html("El alumno fue dado de baja");
                                } else {
                                    $("#modal_alert").html("El alumno no posee id valido");
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

<h1>Alumnos</h1>
<form autocomplete="off" id="formListarAlumno" name="formListarAlumno" action="index.php?section=alumnos&sub=listar_alumnos" method="POST">

    <p>Cantidad total de alumnos: <?php echo $_smarty_tpl->tpl_vars['cantidad_alumnos']->value;?>
<br />
        Estado:
        <input type="hidden" value="" name="apellido" id="nombre"/>
        <input type="hidden" value="" name="nombre" id="apellido"/>
        <input type="hidden" value="" name="dni" id="dni"/>
        <input type="hidden" value="" name="taller" id="taller"/>
        <input type="hidden" value="" name="alta_seguro" id="alta_seguro"/>

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
        <button type="submit" form="formListarAlumno" value="filtrar">Filtrar</button>
    </p>
</form>


<table class="zebra-striped" id="sortTableExample">
    <thead>
        <tr>
            <th>#</th>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th>Fecha Nac.</th>
            <th>Tel&oacute;fono</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(1, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_alumnos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</td>
            <td><?php echo strtoupper($_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['apellido']);?>
</td>
            <td><?php echo strtoupper($_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['nombre']);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['dni'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['fecha_nacimiento'],"d-m-Y");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['telefono'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['estado'];?>
</td>
            <td>
                <img name="ver_alumno" src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
"  />
                <?php if ($_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['estado']=="ACTIVO") {?>
                <img name="modificar_alumno" src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
" />
                <img name="baja_alumno" src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
" />
                <?php } else { ?>
                <img name="alta_alumno" src="images/icons/file_add.png" title="" alt="" border="0" height="17" align="absmiddle" data-id="<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
" />
                <?php }?>
            </td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
        <?php endfor; endif; ?>
    </tbody>
</table>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" id="usrlogin" name="usrlogin"/>
<?php }} ?>
