<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 15:27:41
         compiled from ".\templates\no_browser_admited.html" */ ?>
<?php /*%%SmartyHeaderCode:108756e45913ab42b5-92942668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '298aa9ad13946e595a94586a5887aad554878765' => 
    array (
      0 => '.\\templates\\no_browser_admited.html',
      1 => 1457807261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108756e45913ab42b5-92942668',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e45913b03491_28874453',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e45913b03491_28874453')) {function content_56e45913b03491_28874453($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Casa de Francisco</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/login.css">

        <!-- LIBRERIAS DE JQUERY -->
        <?php echo '<script'; ?>
 src="js/jquery-2.1.4.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery-validate.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!--script src="js/jquery-validate.min.js" type="text/javascript"><?php echo '</script'; ?>
-->

        <?php echo '<script'; ?>
 src="js/jquery-ui/jquery-ui.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link href="js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css"/>

        <?php echo '<script'; ?>
 src="js/jquery-ui/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!--link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/-->

        <link href="js/jquery-ui/jquery-ui.structure.css" rel="stylesheet" type="text/css"/>
        <!--link href="js/jquery-ui/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/-->

        <link href="js/jquery-ui/jquery-ui.theme.css" rel="stylesheet" type="text/css"/>
        <!--link href="js/jquery-ui/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/-->

        <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
            $(document).ready(function () {
              $('#Firefox').click(function(){
                  window.open('https://www.mozilla.org/es-AR/firefox/','_blank');
              });

              $('#Chrome').click(function(){
                  window.open('https://www.google.es/chrome/browser/desktop/','_blank');
              });
            });
            <?php echo '</script'; ?>
>
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
              <h1 id="title">Este sitio solo admite <br /> Mozilla Firefox o Google Chrome</h1>
              <hr>
              <br />Descargar<br /><br />
              <form class="form">
                <button type="button" class="access" id="Firefox" formtarget="_blank"><img src="images/firefox.png" title="" alt="" border="0" height="24" align="absmiddle"/>Modzilla FireFox</button>
                &nbsp;&nbsp;
                <button type="button" class="access" id="Chrome" onclick="" formtarget="_blank"><img src="images/chrome.png" title="" alt="" border="0" height="24" align="absmiddle"/>Google FireFox</button>
              </form>
            </div>

            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </body>
</html>
<?php }} ?>
