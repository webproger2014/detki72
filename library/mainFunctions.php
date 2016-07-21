<?php

  /**
  * 
  * @param type $smarty
  * @param string $controllerName Имя контроллера
  * @param string $actionName Имя функции которую будем вызывать
  */
  function loadPage($smarty, $controllerName = 'Index', $actionName = 'IndexAction'){
        //Инициализируем контролер
        $controller = PathPrefix.$controllerName.PathPostFix;
      
        //Проверка существование контроллера
        if (!file_exists($controller)) {
            $controller = PathPrefix.'Index'.PathPostFix;
        }
        //Подключаем контроллер
        include $controller;
        
        //Проверка функции
        if (!function_exists($actionName)) {
            $actionName = 'indexAction';
        }
        
        //Проверяем нуждается ли контроллер в авторизации
        if (function_exists('checkAutorizationUser')) {
            checkAutorizationUser($smarty, $actionName);
        } else {
            $actionName($smarty);
        }
    }
  
  
    //Загрузка шаблона
   function loadTemplate($smarty, $templateName) {
         $smarty -> display($templateName.TemplatePostFix);
     }

   function getHtmlTemplate($smarty, $templateName) {
       return $smarty -> fetch($templateName.TemplatePostFix); 
   }

   function createSmartyRsArray($rs) {
       if (!$rs) return false;

       $smartyRs = [];
       while ($row = mysqli_fetch_assoc($rs)) {
           $smartyRs = $row;
       }

       return $smartyRs;
   }

   function createSmartyRsAllArr($rs) {
      if (!$rs) return false; 

      $smartyRs = [];
      while ($row = mysqli_fetch_assoc($rs)) {
          $smartyRs[] = $row;
      }
      return $smartyRs;
   }

   function createArrInString($arr) {
       $str = '';
       if ($arr && is_array($arr)) {        
           foreach ($arr as $value) {
               $str .= $value;
           }
       }     
       return $str;
   }
   
   function filterEmail($email) {
     if (preg_match('/^[A-Z|a-z0-9]{2,20}@[a-z\d]{2,10}\.[a-z\d]{2,10}$/', $email)) {
         return true;
     } else {
         return false;               
     }
   }

    function generateHash($hash = 20) {
        $str = '1234567890qwertyuiopasdfghjklzxcvbnm';
        $result = '';
        for ($s = 0; $s < $hash; $s++) {
              $result .= $str[mt_rand(1, 34)];		  
        }

        return $result;
      }   

    function locationController($controller) {
        header('Location: /' . $controller);
    }
    
    function getControllerByLevels($level) {
        $controller = 'index';
        if ($level > 0) {
            $controller = 'admin';
        }
       
        return $controller;
    }
    
    function createPaginator($countLine, $limit = 10) {
        $paginator = [];
        
        $paginator['final_page']["page_number"] = (int)(round($countLine) / $limit) + 1;    
        for ($s = 0; $s < $paginator['final_page']["page_number"]; $s++) {
            $paginator["pages"][$s]["page_number"] = $s + 1;
            $paginator["pages"][$s]["limit"] = $s * $limit;              
        }
        
        $paginator['final_page']["limit"] = ($paginator['final_page']["page_number"] * $limit) - $limit;
        return $paginator;
    }
    
    function sendMail($email, $subject, $messages) {
        mail($email, $subject, $messages, "Content-type: text/html; charset=utf8' . '\r\n'");
    }