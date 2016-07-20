<?php
    require 'models/AutorizationModel.php';

    function checkAutorizationUser($smarty, $action) {
       $user = checkAutorization(); 
       if ($user) {
           locationController(getControllerByLevels($user['role']));         
        } else {
            $action($smarty);
        }        
    }
    
    function indexAction($smarty) {
        loadTemplate($smarty, 'index/autorization');
    }
       
    //> ajax functions
    //Авторизация аккаунта
    function autorizationAction() {
        $data = checkDataLogin([]);
        
        if (!isset($data['messages'])) {
            $data = autorizationUser($data);           
        }
  
        echo json_encode($data);
    }
    
    function createAcccountAction() {
        
    }
    
    //< ajax
    
    
    //> functions check,filters data    
        //Проверка входных данных
        function checkDataLogin($data){
            $data =  checkEmail($data);
            $data =  checkPassword($data);          

            //Проверка логина в бд
           if (!isset($data['messages'])) {
                $user = getUserByLogin($data);
                if (!$user) {
                    $data['messages'] = 'Не правильный логин или пароль';
                } else {
                    $data['controller'] = getControllerByLevels($user['role']);
                }
            }
            
            return $data;
        }
        
        //Проверка email
        function checkEmail($data) {
            $email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : null;  
           
            if (!$email) {
                $data['messages'] = 'Заполните поле email';
            } else {
                if (!filterEmail($email)) {
                    $data['messages'] = 'Не корректный email';
                }
            }
            
            if (!isset($data["messages"])) {
                $data['email'] = $email;
            }
            return $data;  
        }
        
        //Проверка пароля
        function checkPassword($data) {
            $psw = isset($_POST['psw']) ? trim(strip_tags($_POST['psw'])) : null; 
            
            if (!isset($data['messages'])) {
                if (!$psw) {
                    $data['messages'] = 'Введите пароль';
                } else {
                    $data['psw'] = md5(md5($psw));
                }
            } 
            return $data;
        }
    //<
        
    //> list funcitons office
    //Служебная функция для авторизации
    function autorizationUser($data) {
         $hash = generateHash(254);
         setHashUser($data['email'], $hash);
         $data["success"] = 1;
         setcookie('hash', $hash, time() +  864000, '/');
        
        return $data;
    }
    //<    