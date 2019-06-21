<?php  

require "/DataBase/db.php";

 $data = $_POST;


?>
<meta charset="UTF-8">






<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/scss/profile.css">

    <link rel="stylesheet" href="/fonts/fonts.css">

    <title>Профиль</title>
</head>

<body>
    <header>
        <h3 class="page-name">Профиль</h3>

        <div class="nick-logout">
            <h5>
                <?php if(isset($_SESSION['logged_user']) ) :  ?>
                <!-- login user-->
                <?php echo  $_SESSION['logged_user']->login?>



                <?php else : ?>
                header('Location: /login.php')
                <?php endif; ?>
            </h5><span>|</span>
            <a href="/logout.php">Выйти</a>
        </div>


    </header>

    <main>


        <article class="man-info">
            <img id="avatar" src="/img/avatar.png" alt="">
            <div class="score"><img src="/img/crown.png"
                    alt=""><span><?php echo  $_SESSION['logged_user']->ratio?></span></div>
            <div class="info">
                <span>&#9733; <nav>Имя :</nav>
                    <nav><?php echo  $_SESSION['logged_user']->name?></nav>
                </span>
                <span>&#9733; <nav>Фамилия :</nav>
                    <nav><?php echo  $_SESSION['logged_user']->second_name?></nav>
                </span>
                <span>&#9733; <nav>Квант :</nav>
                    <nav><?php echo  $_SESSION['logged_user']->kvant?></nav>
                </span>
                <span>&#9733; <nav>Текекущий проект :</nav></span>


            </div>

        </article>


        <article class="opportunuties">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </article>




    </main>

    <script src="/JS/tabs.js"></script>


</body>