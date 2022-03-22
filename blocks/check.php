<?php
    session_start();

    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    $repassword = filter_var(trim($_POST['repass']),FILTER_SANITIZE_STRING);
    $_SESSION['msg1'] = $_POST['msg1'];
    $_SESSION["msg"] ='';

    if(mb_strlen($name) < 2 || mb_strlen($name) > 90) {
        echo "Недопустимая длина имени";
    }else if(mb_strlen($login) < 3 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логин";
    }else if(mb_strlen($password) < 6 || mb_strlen($password) > 40) {
        echo "Недопустимая длина пароля(не мение 6 символов)";
    }else if($password != $repassword){
        echo "Пароли не совпадают";
    }else{

        $password = md5($password."adwfqrwf21d");

        $mysql = new mysqli('localhost', 'root', '', 'reg-bd');
        $mysql->query("INSERT INTO `users` (`name`, `login`, `password`) VALUES('$name','$login','$password')");

        $mysql->close();
        $_SESSION['msg1'] = 'Вы зарегестрированы';

    }
?>