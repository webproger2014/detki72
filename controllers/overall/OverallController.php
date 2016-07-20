<?php
    /**
     * Общий контроллер
     */
    require 'models/overall/OverallModel.php';
    
    //Проверка авторизации
    function checkAutorization() {
        $hash = isset($_COOKIE['hash']) ? (string)$_COOKIE['hash'] : null;
            
        $user = null;
        if ($hash) {
                $user = getUserByHash($hash);
        }
        return $user;
    }
     
    function logoutAction() {
        setcookie('hash', '', time() - 1, '/');
        locationController('index');
    }
      
    //< ajax
    