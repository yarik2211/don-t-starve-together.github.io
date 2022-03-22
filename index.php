<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <title>Don't Starve Together Guide</title>
    <link rel="shortcut icon" href="img/wilson.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
   <header>
        <?php 
             include ('blocks/head.php');
        ?>
    </header>
    <content>
        <?php
            error_reporting(0);

            if ($_GET['name']=='glav'){
                require_once ('blocks/glav.php');
            }
            elseif ($_GET['name']=='game'){
                require_once ('blocks/game.php');
            }
            else{
                require_once ('blocks/glav.php');
             }
        ?>
    </content>
    <comment>
        <?php
            require_once ('blocks/comm.php');
        ?>
    </comment>
    <footer>
        <?php 
                include ('blocks/footer.php');
        ?>
    </footer>
    
    <script src="https://kit.fontawesome.com/a3c5ada549.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>