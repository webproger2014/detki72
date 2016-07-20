<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="{$templateWebPath}css/main.css">
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
                            <li id="contacts"><div><span></span><a href="/articles/authorArticles/0/{$user.id_user}">Мои статьи</a></div></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>