<?php
    setcookie('user', $user['name'], time() - 3600 * 24, "/"); 
    header("location: ../index.php")
?>