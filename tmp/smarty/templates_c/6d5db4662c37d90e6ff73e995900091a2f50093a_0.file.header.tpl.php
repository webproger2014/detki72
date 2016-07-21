<?php
/* Smarty version 3.1.29, created on 2016-07-21 05:51:14
  from "C:\wamp\www\cms\views\default\index\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579046b276a871_53629328',
  'file_dependency' => 
  array (
    '6d5db4662c37d90e6ff73e995900091a2f50093a' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\index\\header.tpl',
      1 => 1469073072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579046b276a871_53629328 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/index.css">
    </head>
    <body>

        
    <div class="container-head">
        <div class="wrapper">
            <div class="head top-line">
                <div class="container-search">
                    <div class="bg"></div>
                    <input type="text" placeholder="Введите название товара">
                </div>
                
                <div class="title">
                    Итернет-магазин детских товаров, г.Тюмень
                </div>
                
                <div class="head-right-nav">
                    <div class="list-suggestions">
                        <div class="bg">
                            <i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <span id="list"> Лист пожеланий </span>
                            <span id="product"> 0 товаров </span>
                        </div>
                    </div>

                    <div class="container-cart">
                        <div class="bg">
                            <i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <span id="list"> Мои покупки </span>
                            <span id="product"> 0 товаров </span>
                        </div>
                    </div>

                    <div class="container-autorization">
                        <div class="bg"></div>
                        <div class="content">
                            <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value) {?>
                                <a href="/index/logout">Выход</a>
                            <?php } else { ?>
                                <a class="auth" href="#">Вход на сайт</a>
                                <a class="auth" href="#">Регистрация</a>       
                            <?php }?>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="container-logo">
                <div class="bg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/logo.png">
                </div>
            </div>

            <div class="nav">
                <ul>
                    <li class="active">
                        <a href="#">Одежда на лето</a>
                    </li>
                    <li>
                        <a href="#">Зимняя одежда</a>
                    </li>                       
                    <li>
                        <a href="#">спортивная одежда</a>
                    </li>
                    <li>
                        <a href="#">детская одежда</a>
                    </li>                                         
                </ul>
            </div>
        </div>
    </div><?php }
}
