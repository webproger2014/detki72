
//> Подписываемся на события
    $(document).ready(function () {      
        //Подтверждение email
        $('.container-form:nth-child(2) .inputs button').click(function () {
           $('.container-form:nth-child(2)').css('display', 'none');
           
           $('.container-form:nth-child(3)').fadeIn(350);
        }); 
        
         //Проверка email на корректность - вход
        $('.container-form:nth-child(1) #email').keyup(function () {
            var data = checkDataEmail($(this).val());

            if (data["success"] === 1) {
                showSuccess('.login-email', '');
            } else {
                showError('.login-email', data["messages"]);
            }
        }); 

        //Проверка email на корректность - вход
        $('.container-form:nth-child(1) button').click(function () {
            var data = checkDataAutorization();
            
            if (data["success"] === 1) {
                showSuccess('.login-email', '');
                var src = '/autorization/autorization/',
                    data_post = {
                        "email": $('.container-form:nth-child(1) #email').val(),
                        "psw": $('.container-form:nth-child(1) #password').val()
                    };
                ajaxPost(src, data_post, 'autorizationUser');
             } else {
                showError('.login-email', data["messages"]); 
            }
        });            
        //<
    });
//<

//> List functions
    function checkDataAutorization() {
        var data = checkDataEmail($('.container-form:nth-child(1) #email').val());
        
        if (data["success"] === 1) {
            data = checkDataPassword($('.container-form:nth-child(1) #password').val());
        } 
        return data;
    }
    
    function checkDataEmail(email) {
      var data = [];
      
      data["success"] = 1;
      if (!isEmail(email)) {
          data["messages"] = 'Не корректный email';
          data["success"]  = 0;
      }  
      return data;
    }
    
    function checkDataPassword(psw) {
        var data = [];
        
        data["success"] = 1;
        if (psw === '') {
            data["messages"] = 'Введите пароль';
            data["success"]  = 0;
        }
        return data;
    }
    
    function autorizationUser(data) {
        if (data["success"] === 1) {;
            location.href = data["controller"];
        } else {
            showError('.login-email', data["messages"]);
        }
    }
//<
