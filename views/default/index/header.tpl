<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="{$templateWebPath}css/index.css">
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
                            {if isset($user) && $user}
                                {if $user.info.name_user}
                                    {$user.info.name_user}
                                {/if}
                                <a href="/index/logout">Выход</a>
                            {else}
                                <a class="auth" href="#">Вход на сайт</a>
                                <a class="auth" href="#">Регистрация</a>       
                            {/if}
                        </div>
                    </div>
                </div> 
            </div>

            <div class="container-logo">
                <div class="bg">
                    <img src="{$templateWebPath}icons/logo.png">
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
    </div>