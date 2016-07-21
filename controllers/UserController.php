<?php

    require 'models/UserModel.php';

    function checkAutorizationUser($smarty, $action) {
       $user = checkAutorization(); 
       if ($user) {
           if ($user["role"] < 1) {
               $action($smarty, $user);   
           } else {
               locationController('admin'); 
           }                     
        } else {
          locationController('index'); 
        }        
    }
    
    function indexAction($smarty, $user) {
        loadTemplate($smarty, 'user/header');
        loadTemplate($smarty, 'user/index');
        loadTemplate($smarty, 'user/footer');
    } 
    
