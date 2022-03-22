<?php
    session_start();
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DON'T STARVE TOGETHER GUIDE</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?name=glav">Главная</a></li>
                <li><a href="index.php?name=game">Игра</a></li>
                <li><a href="index.php?name=dop">Дополнения</a></li>
                <li><a href="index.php?name=dst">DST</a></li>
                <?php
                    error_reporting(0);
                    if($_COOKIE['user'] == ''):
                ?>
                <li><a class="btn" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-arrow-right-to-bracket"></i> Войти</a></li>
                     <?php else: ?>
                <li><a class="btn" data-toggle="modal" data-target="#exampleModalSession"><?= $_COOKIE['user']; ?> <i class="fa-solid fa-user"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>  
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" arria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
            </div>
            <div class="modal-body">
                <form action="blocks/avtorez.php" method="post">
                    <div class="row l">
                        <label for="inputLogin" class="col-sm-2 col-form-label" >Логин</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputLogin" name="login" required>
                        </div>
                    </div>
                    <div class="row l">
                        <label for="inputPass" class="col-sm-2 col-form-label">Пароль</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPass" name="password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="submit">Вход</button>
                        <button class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ещё нет аккаунта?<a class="btn" data-toggle="modal" data-target="#exampleModalReg" data-dismiss="modal">Зарегистрируйтесь</a></h5>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
   
<div class="modal fade" id="exampleModalReg" tabindex="-1" arria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
            </div>
            <div class="modal-body">
                <form action="blocks/obrreg.php" method="post">
                    <div class="row l">
                        <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputName" name="name" required>
                        </div>
                    </div>
                    <div class="row l">
                        <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
                        <div class="col-sm-10">
                            <input type="login" class="form-control" id="inputLogin" name="login" required>
                        </div>
                    </div>
                    <div class="row l">
                        <label for="inputPass" class="col-sm-2 col-form-label">Пароль</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPass" name="password" required>
                        </div>
                    </div>      
                    <div class="row l">
                        <label for="inputPass" class="col-sm-2 col-form-label">Повтор пароля</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPass" name="repassword" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="submit">Зарегистрироваться</button>
                        <button class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalSession" tabindex="-1" arria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Выйти из аккаунта?</h5>
            </div>
            <div class="modal-body">
                <div class="modal-footer">
                   <form action="blocks/exit.php">
                        <button class="btn btn-secondary" type="submit">Да</button>
                        <button class="btn btn-secondary" data-dismiss="modal">Нет</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>