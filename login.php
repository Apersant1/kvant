<?php


require "/DataBase/db.php";

 $data = $_POST;



 if(    isset($data['do_login'])   )
 {
     $errors = array();     
     $user = R::findOne('users' , 'login = ?' , array($data['login']
 ));

 if($user){
     //сверка логина и пароля
     if(md5($data['password'])  == $user->password  ){

        //Логтним юзера
        $_SESSION['logged_user'] = $user;
        header('Location: /profile.php');

        

     }
     else{
         $errors[] = 'Неверно введен пароль!';
     }
}else{
     $errors[] = 'Пользователь с таким логином не найден!';


 }

 if (! empty($errors)){
    echo '<div id="errors">'.array_shift($errors).'</div>';
 }





}
 









?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- connetcting styles -->
    <link rel="stylesheet" href="/SingIN/scss/style.css">
    <link rel="stylesheet" href="/fonts/fonts.css">

    <!-- connetcting styles -->

    <!-- connecting fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Poppins&display=swap" rel="stylesheet">
    <!-- connecting fonts -->

    <title>Вход</title>
</head>

<body>
    <style>
        #errors {
    color: white;
    position: absolute;
    font-size: 2em;
    width: 100%;
    text-align: center;
    margin-top: 100px;
}
    </style>
    <header style="background-image: url('./bg.jpg');">
        <div class="content">
            <h3>Вход</h3>
            <div class="form">
                <form action="/login.php" method="POST">


                    <input name="login"  type="text" placeholder="Логин">
                    <input  name="password" type="password" placeholder="Пароль">



                    <button class="submit" name="do_login" type="submit">Войти</button>

                    <div class="links">
                        <a href="/">Забыли пароль?</a>
                        <a href="../register.php">Создать аккаунт</a>
                    </div>


                </form>
            </div>
        </div>

    </header>

</body>

</html>