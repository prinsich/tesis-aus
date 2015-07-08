<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-01 21:18:35
         compiled from ".\templates\alumnos\ver_alumno.html" */ ?>
<?php /*%%SmartyHeaderCode:2311255947953577ec8-11882884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a7da15c040c067041768593b07c146f48c6a52a' => 
    array (
      0 => '.\\templates\\alumnos\\ver_alumno.html',
      1 => 1435796313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2311255947953577ec8-11882884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55947953a443e4_59287064',
  'variables' => 
  array (
    'datos_alumno' => 0,
    'talleres_alumno' => 0,
    'datos_medicos' => 0,
    'datos_familiares' => 0,
    'datos_personales' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55947953a443e4_59287064')) {function content_55947953a443e4_59287064($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\modifier.date_format.php';
?><style>
    td { /*border: none;*/ text-align: left; /*width: 10%;*/}
</style>
<h1>Ver Alumno</h1>
<h2>Datos Personales</h2>

<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Apellido:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['apellido'];?>
</b></td>
    </tr>
    <tr>
        <td>Nombres:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['nombre'];?>
</b></td>
    </tr>
    <tr>
        <td>Sexo:</td>
        <?php if ($_smarty_tpl->tpl_vars['datos_alumno']->value['sexo']=="M") {?>
        <td><b>MASCULINO</b></td>
        <?php } elseif ($_smarty_tpl->tpl_vars['datos_alumno']->value['sexo']=="F") {?>
        <td><b>FEMENINO</b></td>
        <?php } else { ?>
        <td><b>50-50 :v</b></td>
        <?php }?>
    </tr>
    <tr>
        <td>Domicilio:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['domicilio'];?>
</b></td>
    </tr>
    <tr>
        <td>Barrio:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['barrio'];?>
</b></td>
    </tr>
    <tr>
        <td>Tel&eacute;fono:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['telefono'];?>
</b></td>
    </tr>
    <tr>
        <td>DNI:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['dni'];?>
</b></td>
    </tr>
    <tr>
        <td>Fecha de Nacimiento:</td>
        <td><b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datos_alumno']->value['fecha_nacimiento'],"d-m-Y");?>
</b></td>
    </tr>
    <tr>
        <td>Escuela:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['escuela'];?>
</b></td>
    </tr>
    <tr>
        <td>A&ntilde;o</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['anio'];?>
</b></td>
    </tr>
    <tr>
        <td>Turno</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['turno'];?>
</b></td>
    </tr>
    <tr>
        <td>Alta Seguro</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_alumno']->value['alta_seguro'];?>
</b></td>
    </tr>
</table>

<h2>Talleres a los q asiste</h2>

<table style="width: 70%; border: none; padding-left: 10%;" >
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['talleres_alumno']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        <td>&DoubleRightArrow; <?php echo $_smarty_tpl->tpl_vars['talleres_alumno']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['nombre'];?>
</td>
        <?php endfor; endif; ?>
    </tr>
</table>

<h2>Datos M&eacute;dicos</h2>

<table style="width: 70%; border: none; padding-left: 10%;" >
    <tr>
        <td style="width: 55%">Grupo Sangu&iacute;neo:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['grupo_sanguineo'];
echo $_smarty_tpl->tpl_vars['datos_medicos']->value['factor'];?>
</b></td>
    </tr>
    <tr>
        <td>Vacunaci&oacute;n:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['vacunacion'];?>
</b></td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['datos_medicos']->value['vacunacion']=="INCOMPLETA") {?>
    <tr>
        <td>Vacunas Faltantes:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['vacunas_faltantes'];?>
</b></td>
    </tr>
    <?php }?>
    <tr>
        <td>Enfermedades Padecidas:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['enfermedades_padecidas'];?>
</b></td>
    </tr>
    <tr>
        <td>Alergias:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['alergias'];?>
</b></td>
    </tr>
    <tr>
        <td>Secuelas:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['secuelas'];?>
</b></td>
    </tr>
    <tr>
        <td>Cuidados Especiales:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['cuidados_especiales'];?>
</b></td>
    </tr>
    <tr>
        <td>Enfermedades Cong&eacute;nitas:</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['enfermedades_cogenitas'];?>
</b></td>
    </tr>
    <tr>
        <td>Cirug&iacute;as</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['cirugias'];?>
</b></td>
    </tr>
    <tr>
        <td>Tratamientos M&eacute;dicos Prolongados</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['tratamientos_prolongados'];?>
</b></td>
    </tr>
    <tr>
        <td>Tratamientos M&eacute;dicos Actuales</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['tratamientos_actuales'];?>
</b></td>
    </tr>
    <tr>
        <td>Medicamentos que toma actualmente</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['medicacion_actual'];?>
</b></td>
    </tr>
    <tr>
        <td>En caso de URGENCIA, M&eacute;dicos autorizados para su tratamiento y Hospitales o Centros M&eacute;dicos para su traslado</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['urgencias'];?>
</b></td>
    </tr>
    <tr>
        <td>Obra Social</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['datos_medicos']->value['obra_social'];?>
</b></td>
    </tr>
</table>

<h3>El taller se encuentra protegido por Seguro San Crist&iacute;bal.</h3>

<h2>Grupo Familiar y/o de Convivencia</h2>

<table id="familiares">
    <tr>
        <th>Nombre y Apellido</th>
        <th>Parentesco</th>
        <th>Edad</th>
        <th>Estado Civil</th>
        <th>Vive en el Hogar</th>
        <th>Ocupaci&oacute;n</th>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['name'] = 'dm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datos_familiares']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dm']['total']);
?>
    <tr>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['nombre_apellido'];?>
" name="nombre_apellido_0" class="inputntable" readonly/></td>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['parentesco'];?>
" name="parentesco_0" readonly/></td>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['edad'];?>
" name="edad_0" class="inputedad" readonly/></td>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['estado_civil'];?>
" name="estado_civil_0" style="width: 80px;" readonly/></td>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['vive_hogar'];?>
" name="vive_hogar_0" style="width: 80px;" readonly/></td>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_familiares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dm']['index']]['ocupacion'];?>
" name="ocupacion_0" readonly/></td>
    </tr>
    <?php endfor; endif; ?>
</table>

<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td>Observaciones:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['observaciones_familiares'];?>
</td>
    </tr>
</table>
<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td style="width: 50%;"><ul>
                <li>Relaciones familiares. </li>
                <li>Din&aacute;mica Familiar. </li>
                <li>Momento de encuentro familiar. </li>
                <li>Problemas m&aacute;s comunes en su familia. </li>
                <li>Situaci&oacute;n econ&oacute;mica-laboral de su familia. </li>
                <li>Integraci&oacute;n de su familia a la comunidad.</li>
            </ul></td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['relaciones_familiares'];?>
</td>
    </tr>
</table>

<h2>Grupo de Amigos</h2>

<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td style="width: 50%;"><ul>
                <li>Si tiene amigos, c&oacute;mo son y qu&eacute; hacen. </li>
                <li>Cu&aacute;nto tiempo pasa con ellos. </li>
                <li>Qu&eacute; hacen juntos. </li>
                <li>Qu&eacute; le gusta hacer con ellos. </li>
                <li>Qu&eacute; le gusta y qu&eacute; no de sus amigos. </li>
            </ul></td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['grupo_amigo'];?>
</td>
    </tr>
</table>

<h2>Tiempo Libre</h2>

<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td style="width: 50%;"><ul>
                <li>Qu&eacute; actividades recreativas realiza. </li>
                <li>Qu&eacute; otras actividades recreativas le gustar&iacute;a realizar. </li>
            </ul></td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['tiempo_libre'];?>
</td>
    </tr>
</table>

<h2>Educaci&oacute;n</h2>

<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td style="width: 50%;"><ul>
                <li>Si participa del sistema educativo. </li>
                <li>Inconvenientes con la educaci&oacute;n o con el sistema. </li>
                <li>Importancia que le da. </li>
                <li>Problemas con la instituci&oacute;n educativa, profesores, etc. </li>
                <li>Qu&eacute; le gusta y qu&eacute; no de la escuela. </li>
            </ul></td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['educacion'];?>
</td>
    </tr>
</table>

<h2>Trabajo</h2>

<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td style="width: 50%;"><ul>
                <li>Si tiene o ha tenido alg&uacute;n trabajo. </li>
                <li>Motivo por los cuales trabaja. </li>
                <li>Formas en que consigui&oacute; el trabajo. </li>
                <li>Problemas o dificultades que tiene o ha tenido. </li>
                <li>Importancia que le da. </li>
                <li>Qu&eacute; le gusta y qu&eacute; no del trabajo. </li>
            </ul></td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['trabajo'];?>
</td>
    </tr>
</table>

<h2>Instituciones</h2>

<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td style="width: 50%;">C&oacute;mo llega a Casa de Francisco:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['como_llega'];?>
</td>
    </tr>
    <tr>
        <td>Por qu&eacute; viene a Casa de Francisco:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['porque_viene'];?>
</td>
    </tr>
    <tr>
        <td>Instituciones a las que ha asistido:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['instituciones'];?>
</td>
    </tr>
</table>

<h2>Caracter&iacute;sticas Personales</h2>

<table style="width: 90%; border: none; padding-left: 5%;" >
    <tr>
        <td style="width: 50%;">Preocupaciones:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['preocupaciones'];?>
</td>
    </tr>
    <tr>
        <td>Qu&eacute; hizo al respecto:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['que_hizo'];?>
</td>
    </tr>
    <tr>
        <td>Observaciones:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos_personales']->value['observaciones_personales'];?>
</td>
    </tr>
</table>

<input class="btnSubmit" type="button" name="volver" value="volver" onclick="history.back();">
<?php }} ?>
