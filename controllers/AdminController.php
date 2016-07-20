<?php

    require 'models/AdminModel.php';
    
    function checkAutorizationUser($smarty, $action) {
       $user = checkAutorization(); 
       if ($user) {
           if ($user['role'] > 0) {
              $action($smarty, $user); 
           } else {
             locationController('index');    
           }       
        } else {
            locationController('index');
        }        
    }
    
    //> actions
    function indexAction($smarty, $user) {
         $smarty -> assign("user", $user);
        
         loadTemplate($smarty, 'admin/header');
         loadTemplate($smarty, 'admin/index');
         loadTemplate($smarty, 'admin/footer');
    }

    //< list functions, filters,cheks - controller settings