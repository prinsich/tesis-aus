<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-06 09:41:41
         compiled from "templates\certificados\certificado.html" */ ?>
<?php /*%%SmartyHeaderCode:463577cfc85055a39-94566674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e49616932e81567ccedb310600ab8ba2741ac632' => 
    array (
      0 => 'templates\\certificados\\certificado.html',
      1 => 1426346577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '463577cfc85055a39-94566674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre_alumno' => 0,
    'dni_alumno' => 0,
    'estado' => 0,
    'nombre_taller' => 0,
    'fecha' => 0,
    'nombre_capacitador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577cfc851a2539_85824214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfc851a2539_85824214')) {function content_577cfc851a2539_85824214($_smarty_tpl) {?><div style="color: #000080;">
<p style="line-height:  45px; font-size: 25px;">
Certifica que <font face="dejavusans"><em><?php echo $_smarty_tpl->tpl_vars['nombre_alumno']->value;?>
</em></font><br />
Documento Nº <font face="dejavusans"><em><?php echo $_smarty_tpl->tpl_vars['dni_alumno']->value;?>
</em></font><br />
<?php if ($_smarty_tpl->tpl_vars['estado']->value=="a") {?>
<font face="dejavusans"><em>ASISTI&Oacute; </em></font> al
<?php } else { ?>
Se <font face="dejavusans"><em>CAPACIT&Oacute; </em></font> en el
<?php }?>
curso de <font face="dejavusans"><em><?php echo $_smarty_tpl->tpl_vars['nombre_taller']->value;?>
</em></font><br/>
Que se dictó en:<br />
<b>Asociaci&oacute;n Civil Casa de Francisco.</b><br/>
</p>
<p style="font-size: 20px;" align="rigth">Santo Tom&eacute;, <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
.</p>
<p></p><p></p><p></p>
<br /><br /><br /><br /><br /><br />

<table style="text-align: center; width: 100%;" >
    <tr>
        <td>
            <font face="times">................................................</font>
        </td>
        <td>
            <font face="times">................................................</font>
        </td>
    </tr>
    <tr>
        <td>
            <font face="times"><?php echo $_smarty_tpl->tpl_vars['nombre_capacitador']->value;?>
</font>
        </td>
        <td>
            <font face="times">PATRICIA GARAY</font>
        </td>
    </tr>
    <tr>
        <td>
            <font face="times">Capacitador</font>
        </td>
        <td>
            <font face="times">Presidente</font>
        </td>
    </tr>
</table>
</div>
<?php }} ?>
