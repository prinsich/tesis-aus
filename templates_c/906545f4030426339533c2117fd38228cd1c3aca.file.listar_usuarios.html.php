<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-05 10:51:36
         compiled from ".\templates\admin\listar_usuarios.html" */ ?>
<?php /*%%SmartyHeaderCode:246025591d12270af08-68012229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906545f4030426339533c2117fd38228cd1c3aca' => 
    array (
      0 => '.\\templates\\admin\\listar_usuarios.html',
      1 => 1435890715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246025591d12270af08-68012229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5591d122b148a6_05845716',
  'variables' => 
  array (
    'Sajax' => 0,
    'cantidad_usuarios' => 0,
    'lista_usuarios' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5591d122b148a6_05845716')) {function content_5591d122b148a6_05845716($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\function.counter.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    
    function ver_usuario(id) {
        var urlp = "index.php?section=admin&sub=ver_usuario&id_usuario=" + id;
        window.open(urlp, "_self");
    }

    function modificar_usuario(id) {
        var urlp = "index.php?section=admin&sub=modificar_usuario&id_usuario=" + id;
        window.open(urlp, "_self");
    }

    function alta_usuario(id) {
        if (confirm("Esta seguro que desea dar de alta este usuario?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_alta_usuario(id, usrlogin, retorno_cb);
        }
    }

    function baja_usuario(id) {
        if (confirm("Esta seguro que desea dar de baja este usuario?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_baja_usuario(id, usrlogin, retorno_cb);
        }
    }

    function retorno_cb(z) {
        alert(z);
        window.location.reload();
    }
    
    
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
                <td><?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['apellido'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado'];?>
</td>
                <td>
                    <img src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="ver_usuario('<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
')" />
                    <img src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="modificar_usuario('<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
')" />
                    <?php if ($_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['estado']=="ACTIVO") {?>
                        <img src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="baja_usuario('<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
')"/>
                    <?php } else { ?>
                        <img src="images/icons/file_add.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="alta_usuario('<?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id_usuario'];?>
')"/>
                    <?php }?>
                </td>
            </tr>
            <?php endfor; endif; ?>
        </tbody>
    </table> 
</div>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" id="usrlogin" name="usrlogin"/><?php }} ?>
