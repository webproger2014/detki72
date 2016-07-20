   
    <div class="container-right">
        <div class="wrapper">
            <div class="head top-line">
                    <h1>Настройки аккаунта</h1>
             </div>
            
            <div class="head content">
                <div class="edit-info-account">
                    <div id="messages" class="error"></div>
                    <input type="text" placeholder="email"  value="{$user.login}" id="email">
                    <input type="text" placeholder="name"  value="{$user.name}" maxlength="30" id="name">
                    <a href="/articles/users/{$user.id_user}">Статьи автора</a>
                    <span id="{$user.id_user}">Сохранить</span>
                </div>
            </div>
        </div>
    </div>



<!--/exit contaner-body-->
</div>

