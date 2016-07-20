<?php

    require 'models/IndexModel.php';

    function checkAutorizationUser($smarty, $action) {
       $user = checkAutorization(); 
       $action($smarty, $user);
    }
    
    
    function indexAction($smarty, $user) {
        
         $smarty -> assign('user', $user);
        
         loadTemplate($smarty, 'index/header');
         loadTemplate($smarty, 'index/index');
         loadTemplate($smarty, 'index/footer');        
    }