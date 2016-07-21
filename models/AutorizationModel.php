<?php    
    //Вернуть информацию юзера по логину
    function getUserByLogin($data) {
        $mysqli = createMysqli();
        $sql =  "SELECT * FROM `users`
                  WHERE `login`='{$data['email']}' 
                   AND `password`='{$data['psw']}'";
   
        $rs = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
   
        return createSmartyRsArray($rs);          
    }
    
    //Установка хеша юзера
    function setHashUser($email, $hash) {
        $mysqli = createMysqli();
        $sql =  "UPDATE `users` SET `hash`='{$hash}'
                  WHERE `login`='{$email}'";
   
        mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);         
    }
    
    function createAccount($data) {
        $mysqli = createMysqli();
        $sql =  "INSERT INTO users(login,password) 
                  VALUE('{$data["email"]}', '{$data["psw"]}')";
   
        mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);         
    }
