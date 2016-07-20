<?php
/* Smarty version 3.1.29, created on 2016-07-18 08:06:48
  from "C:\wamp\www\cms\views\default\admin\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578c71f82053c7_98119211',
  'file_dependency' => 
  array (
    '967f74c8351c09147f0a41dd4b64a5b75ec1fd3a' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\admin\\header.tpl',
      1 => 1468822006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578c71f82053c7_98119211 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
    </head>
    <body>
      
      <!-- list modals -->
      <div class="modal del-user">
        <div class="container-modal-del-user">
            <h4>Вы действительно хотите удалить пользователя?</h4>
            <div id="messages"></div>
            <table>
                <tr class="title">
                    <td>id</td>
                    <td>email</td>
                </tr>
                        
                <tr class="users">
                </tr>
             </table>
            <button id='del-user'>да</button>
            <button id='cancel-del-user'>отмена</button>
        </div>
      </div>
     <div class="modal del-article">
        <div class="container-modal-del-article">
            <h4>Вы действительно хотите удалить статью?</h4>
            <div id="messages"></div>
            <table>  
                <tr class="article">
                </tr>
             </table>
            <button id='del-article'>да</button>
            <button id='cancel-del-article'>отмена</button>
        </div>
      </div>
     <!-- /list modals -->   
       <div class="container-body"> 
        <div class="container-left-nav">
            <div class="wrapper">
                <div class="head close-nav">
                    <span check="true" class="check-span" action="animateLefNav" success="true"></span>
                </div>
                
                <div class="head animation">
                    <div class="head avatars">
                        <div>
                            База знаний
                            <?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>

                        </div>
                    </div>
                
                    <div class="center-nav">
                        <ul>
                            <li><a href="/admin" id="home"></a></li>
                            <li><a href="/admin/settings" id="settings"></a></li>
                            <li><a href="/admin/logout" id="exit"></a></li>
                        </ul>
                    </div>
                
                    <div class="left-nav">
                        <ul>
                        </ul>
                    </div>    
                </div>
            </div>
        </div><?php }
}
