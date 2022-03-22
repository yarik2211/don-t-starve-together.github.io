<?php
    if(!empty($_POST['name'])&&!empty($_POST['login'])&&!empty($_POST['password'])&&!empty($_POST['repassword']&&($_POST['password'] == $_POST['repassword'])))
       {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $pass = $_POST['password'];
        $repass = $_POST['repassword'];
        
        $conn = mysqli_connect("localhost", "root", "", "reg-bd");
        
        if (!$conn)die ("Невозможно запустить mysql");
        
        $pass = md5($pass."adwfqrwf21d");
        
        $query = "INSERT INTO `users` (name, login, password) VALUES ('$name','$login','$pass')";
        
        header("Location:../index.php");  
        $result = mysqli_query($conn,$query) or die ('Ресурс не найденeser');      
        }else{
        echo "Данных нет";
    }
?>