<?php

   /* function createUser($data) {
        $mysqli = createMysqli();
        $sql =  "INSERT INTO users(login,name,password) 
                 VALUE('{$data['email']}', '{$data['name']}', '{$data['psw']}')";
   
        mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);       
    }
    
    function deleteUser($user_id) {
        $mysqli = createMysqli();
        $sql    = "DELETE FROM `users` WHERE `id_user`={$user_id}";
        
        mysqli_query($mysqli, $sql);       
    }
    
    function editInfoAccountUser($data) {
        $mysqli = createMysqli();
        $sql    = "UPDATE `users` 
                   SET `login`='{$data["email"]}', `name`='{$data["name"]}'
                   WHERE `id_user`={$data["id_user"]}";
        
        mysqli_query($mysqli, $sql);           
    }
    
    function getUserByEmail($email) {
        $mysqli = createMysqli();
        $sql =  "SELECT * FROM `users`
                  WHERE `login`='{$email}'";
   
        $rs = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
   
        return createSmartyRsArray($rs);          
    }
    
    function getUsersByLimit($limit) {
        $mysqli = createMysqli();
        $sql    = "SELECT * FROM `users` LIMIT {$limit}, 10";
        
        $rs = mysqli_query($mysqli, $sql);
        return createSmartyRsAllArr($rs);
    }*/