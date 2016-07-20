
//> Подписываемся на события
    $(document).ready(function () {     
        
    //Проверка email на корректность - вход
        $('#modal-auth .auth #email').keyup(function () {
            var data = checkDataEmail($(this).val());

            if (data["success"] === 1) {
                showSuccess('#modal-auth #messages', '');
            } else {
                showError('#modal-auth #messages', data["messages"]);
            }
        }); 

        //Проверка email на корректность - вход
        $('#modal-auth .auth #auth').click(function () {
            var data = checkDataAutorization();
            
            if (data["success"] === 1) {
                showSuccess('.login-email', '');
                var src = '/autorization/autorization/',
                    data_post = {
                        "email": $('#modal-auth .auth #email').val(),
                        "psw": $('#modal-auth .auth #psw').val()
                    };
                ajaxPost(src, data_post, 'autorizationUser');
             } else {
                showError('#modal-auth #messages', data["messages"]); 
            }
        });            
        //<
    });
//<

//> List functions
    function checkDataAutorization() {
        var data = checkDataEmail($('#modal-auth .auth #email').val());
        
        if (data["success"] === 1) {
            data = checkDataPassword($('#modal-auth .auth #psw').val());
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
            showError('#modal-auth #messages', data["messages"]);
        }
    }
//<


//AUTH
    $(document).ready(function() {
        
        //display modal auth
        $('.auth').click(function () {
            var modal = $('#modal-auth');
            $(modal).fadeIn(200);
        });
        
        //hide display modal auth
        $("#close-auth-modal").click(function () {
            var modal = $('#modal-auth');
            $(modal).fadeOut(200);       
        });
        
         //register account
         $('#modal-auth .auth a#reg').click(function () {
             showSuccess('#modal-auth #messages', '');
             $("#modal-auth .auth").css('display', 'none');
             $("#modal-auth .reg").show(200);
         });
         
          //auth account
         $('#modal-auth .reg a#auth').click(function () {
             showSuccess('#modal-auth #messages', '');
             $("#modal-auth .reg").css('display', 'none');
             $("#modal-auth .auth").show(200);
         });        
    });
//