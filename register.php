<?php

require "DataBase//db.php";

$data = $_POST;

if ( isset($data['do_signup'])  )
{
    //register users
    $error = array();

    if( trim($data['name']) == '')
    {
        $error[] = 'Введите ваше имя!';
    }

    if( trim($data['second_name']) == '')
    {
        $error[] = 'Введите вашу фамилию!';
    }
    



    if( trim($data['login']) == '')
    {
        $error[] = 'Введите логин!';
    }


    if( trim($data['email']) == '')
    {
        $error[] = 'Введите email!';
    }

    if( trim($data['password']) == '')
    {
        $error[] = 'Введите пароль!';
    }

   

    if( R::count('user', "login = ?", array($data['login'])) > 0 )
    {
        $error[] = 'Пользователь  с таким логином уже существует!';
    }

    
    if( R::count('user', "email = ?", array($data['email'])) > 0 )
    {
        $error[] = 'Пользователь  с таким email уже существует!';
    }



    if( empty($error))
    {
        // register
        $user =R::dispense('users');
        $user->name  = $data['name'];
        $user->second_name = $data['second_name'];
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = md5($data['password']);
        R::store($user);
        
        header('Location: /index.php');

    }else{
        echo '<div id="errors">'.array_shift($error).'</div>';
    }

    
}



?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- connetcting styles -->
    <link rel="stylesheet" href="../scss/style.css">
    <link rel="stylesheet" href="/fonts/fonts.css">

    <!-- connetcting styles -->

    <!-- connecting fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Poppins&display=swap" rel="stylesheet">
    <!-- connecting fonts -->

    <title>Регистрация</title>
</head>

<body>
    <header style="background-image: url('./img/bg.jpg');">
        <div class="content">
            <h3>Регистрация</h3>
            <div class="form">
                <form action="/register.php" method="POST">

                    <input name="name" type="text" placeholder="Имя">
                    <input name="second_name" type="text" placeholder="Фамилия">
                    <input name="surname" type="text" placeholder="Отчество">
                    <input name="login" type="text"      placeholder="Логин">
                    <input name="email" type="email"  placeholder="text@test.com">
                    <input name="password" type="password"  placeholder="Пароль">

                    <div class="kvant">
                        <label for="">Квант:</label>
                        <div class="dropdown">

                            <div id="dropbtn" class="dropbtn">
                                <p id="kvant">Выберите квант</p>
                                <div id="triangle" class="triangle"></div>
                                <div id="dropdown-content" class="dropdown-content">

                                    <a id="it" href="#">IT</a>
                                    <a id="aero" href="#">Аэро</a>
                                    <a id="auto" href="#">Авто</a>
                                    <a id="laser" href="#">Лазер</a>
                                    <a id="bio" href="#">Био</a>
                                    <a id="robo" href="#">Робо</a>
                                    <a id="energy" href="#">Энерджи</a>
                                </div>
                            </div>


                        </div>



                    </div>
                    <button class="submit" name="do_signup" type="submit">Зарегистрироваться</button>

                </form>
            </div>
        </div>

    </header>


    <script src="./JS/main.js"></script>

</body>

</html>