<?php
/* Smarty version 3.1.29, created on 2016-07-18 06:28:28
  from "C:\wamp\www\cms\views\default\index\autorization.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578c5aec378998_12534368',
  'file_dependency' => 
  array (
    '863394a270a8b2970a0cc03a363cc3be553df2c5' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\index\\autorization.tpl',
      1 => 1468816106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578c5aec378998_12534368 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Авторизация</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css">
    </head>
    <body>
     <div class="container-form">
         
         <div class="header">
             <h1>Войти</h1>            
             <div class="inputs">
                 <span class="error login-email"></span>
                 <span class="success login-email"></span>
                 <input type="text" placeholder="Login" id="email">
                 <input type="password" placeholder="****" id="password">
                 <button class="">ВХОД</button>
             </div>
         </div>
     </div>
          
    <!-- CMS -->    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
library/cms.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
index/index.js"><?php echo '</script'; ?>
>
    <!-- /CMS -->
    </body>
</html>
<?php }
}
