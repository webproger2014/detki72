<?php
/* Smarty version 3.1.29, created on 2016-07-09 20:43:06
  from "C:\wamp\www\cms\views\default\user\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578145ba611453_36085907',
  'file_dependency' => 
  array (
    'f4719da3d0ea44dcf5cfe33f49fcfb9bc2c4b716' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\user\\header.tpl',
      1 => 1468084177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578145ba611453_36085907 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
    </head>
    <body>
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
                        </div>
                    </div>
                
                    <div class="center-nav">
                        <ul>
                            <li><a href="/user/" id="home"></a></li>
                            <li><a href="/user/logout" id="exit"></a></li>
                        </ul>
                    </div>
                
                    <div class="left-nav">
                        <ul>
                            <li id="contacts"><div><span></span><a href="/articles/">Публикации</a></div></li>
                            <li id="contacts"><div><span></span><a href="/articles/createArticles">Создать статью</a></div></li>
                            <li id="contacts"><div><span></span><a href="/articles/authorArticles/1/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">Мои статьи</a></div></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div><?php }
}
