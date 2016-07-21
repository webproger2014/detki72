
<div class="container-slider">
    <div class="wrapper"> 
        <div class="slider-images bg">
            <span class="bg_next1"></span>
            <div class="owl-carousel"  id="owl-carousel">
                <img id="0" class="img-slide" src="{$templateWebPath}images/girl.png">
                <img id="1" class="img-slide" src="{$templateWebPath}images/sharf1.jpg">
            </div>    
        </div>
      <span class="bg_next2"></span>  
        <div class="wrapper-content active" id="0">
            <div class="content">
                <h3>Повязка для волос</h3>
                <p>
                    Яркая повязка для волос фирмы “Марка-Фирма”
                    прекрасно подчеркнет индивидуальность 
                    и естественную красоту Вашего ребенка.
                </p>
                <div class="add-product">
                    <a>Положить в корзину</a>
                    <span></span>
                </div>
            </div>
        </div>

        <div class="wrapper-content" id="1">
            <div class="content">
                <h3>Шарифк</h3>
                <p>
                    Шарфик от бабки
                </p>
                <div class="add-product">
                    <a>Положить в корзину</a>
                    <span></span>
                </div>
            </div>
        </div>       
    </div>
      <!--  <div class="next_slide">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>  -->      
</div>


<div class="container-content">
    <div class="wrapper">
        <div class="content">
            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>
            

            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>

            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>

            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>

            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>
            

            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>

            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>

            <div class="category">
                <div class="bg"><img src="{$templateWebPath}images/children.png"></div>
                <h2>Детская одежда</h2>
                <p>
                    Одежда для детей различного возраста
                </p>
                <div class="add-product">
                    <a>Перейти в раздел</a>
                    <span></span>
                </div>                
            </div>              
        </div>
    </div>
</div>
                
                
<div id="modal-auth">
    <span id="close-auth-modal">
        <i class="fa fa-times" aria-hidden="true"></i>
    </span>
    
	<div id="login" class="auth">
            <div id="messages"></div>
            <form>
		<fieldset class="clearfix">
                    <p><span class="fontawesome-user"><i class="fa fa-user" aria-hidden="true"></i></span><input id="email" type="text" value="Логин" onBlur="if(this.value == '') this.value = 'Логин'" onFocus="if(this.value == 'Логин') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                    <p><span class="fontawesome-lock"><i class="fa fa-lock" aria-hidden="true"></i></span><input id="psw" type="password"  value="Пароль" onBlur="if(this.value == '') this.value = 'Пароль'" onFocus="if(this.value == 'Пароль') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                    <p><input type="submit" value="ВОЙТИ" id="auth"></p>
		</fieldset>
            </form>
	<p>Нет аккаунта? &nbsp;&nbsp;<a href="#" id="reg">Регистрация</a><span class="fontawesome-arrow-right"></span></p>
    </div>
    
	<div id="login" class="reg">
            <div id="messages"></div>
            <form>
		<fieldset class="clearfix">
                    <p><span class="fontawesome-user"><i class="fa fa-user" aria-hidden="true"></i></span><input id="email" type="text" placeholder="Логин" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                    <p><span class="fontawesome-lock"><i class="fa fa-lock" aria-hidden="true"></i></span><input id="psw1" type="password"  placeholder="****" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                    <p><span class="fontawesome-lock"><i class="fa fa-lock" aria-hidden="true"></i></span><input id="psw2" type="password"  placeholder="****" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                    <p><input type="submit" value="РЕГИСТРАЦИЯ" id="createAccount"></p>
		</fieldset>
            </form>
            <p> Вы зарегистрированы?&nbsp;&nbsp;<a href="#" id="auth">Вход</a><span class="fontawesome-arrow-right"></span></p>
    </div>    
</div>	
                