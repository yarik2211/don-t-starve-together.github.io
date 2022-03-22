<?php

    if(!empty($_POST['login'])&&!empty($_POST['password']))
    {
        $login = $_POST['login'];
        $pass = $_POST['password'];
        
        $pass = md5($pass."adwfqrwf21d");
        
        $conn = new mysqli("localhost", "root", "",  "reg-bd");
    
        $result = $conn->query("SELECT * FROM `users` where `login` = '$login' and `password` = '$pass'");
        $user = $result->fetch_assoc();
            
        if (count($user) == 0) {
            echo "Пользователь не найден";
            exit();
        }

        setcookie('user', $user['name'], time() + 3600 * 24, "/");   
        
        $conn->close();

        header("Location:../index.php"); 
            
    }
?>   
