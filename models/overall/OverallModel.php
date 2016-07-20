<?php

 /**
  * Общиая модель
  */

    //Вернуть пользователя по хешу
    function getUserByHash($hash) {
        $mysqli = createMysqli();
        $sql =  "SELECT * FROM `users` WHERE `hash`='{$hash}'";
   
        $rs = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
        return createSmartyRsArray($rs);   
    }
        
   function getUserById($id_user) {
        $mysqli = createMysqli();
        $sql =  "SELECT * FROM `users` WHERE `id_user`='{$id_user}'";
   
        $rs = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
        return createSmartyRsArray($rs);       
   }
   
       //Количество строк
    function countLine($table) {
        $mysqli = createMysqli();
        $sql =  "SELECT COUNT(*) FROM {$table}";
   
        $rs = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
   
        return createSmartyRsArray($rs);          
    }
    
    function getUsers() {
        $mysqli = createMysqli();
        $sql =  "SELECT * FROM `users`";
   
        $rs = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
   
        return createSmartyRsArray($rs);          
    }

    //Получим информацию о пользователе (город,имя, фамилию, телефон)
    function getInfoUser($id_user) {
        $mysqli = createMysqli();
        $sql =  "SELECT * FROM `info_user` WHERE `id_user`={$id_user}";
   
        $rs = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
   
        return createSmartyRsArray($rs);            
    }