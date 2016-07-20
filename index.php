<?php

 session_start();
 require 'config/config.php';
 require 'config/connectDB.php';
 require 'library/mainFunctions.php';
 //Общий контроллер
 require 'controllers/overall/OverallController.php';
 //чпу
  if (isset($_GET['controller'])) {
    $get = explode('/', $_GET['controller']);
  }

  //Определяем контроллер
  $controllerName = isset($get[0]) ? ucfirst($get[0]) : null;
  if (!$controllerName) {
      $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
  }
  
   //Определяем вызов функции
  $actionName = isset($get[1]) ? ucfirst($get[1]).'Action': null;
  if (!$actionName) {
       $actionName = isset($_GET['action']) ? ucfirst($_GET['action']).'Action': 'Index';
  }

 loadPage($smarty, $controllerName, $actionName);