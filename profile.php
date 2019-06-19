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



            <div class="container--tabs">
                <section class="row">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-1">Проекты</a></li>
                        <li class=""><a href="#tab-2">Достижения</a></li>
                        <li class=""><a href="#tab-3">Друзья</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <span
                                class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <h3>Текущие проекты</h3>

                                <!-- здесь блоки с проектами -->
                                <div class="projects">
                                    <div class="project">

                                    </div>
                                </div>

                            </span>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <span
                                class="glyphicon glyphicon-fire glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <h3>Ваши достижения</h3>

                                <!-- здесь блоки с ачивками -->
                                <div class="archivments">
                                    <div class="archivment">

                                        <div class="circle-avatar"></div>
                                        <div class="archivment-info">
                                            <span>God mode</span>
                                            <nav>Выполнить 5 проектов</nav>
                                        </div>

                                    </div>
                                    <div class="archivment">

                                        <div class="circle-avatar"></div>
                                        <div class="archivment-info">
                                            <span>Архиватор</span>
                                            <nav>Не закончить 2 проекта</nav>
                                        </div>

                                    </div>
                                    <div class="archivment">

                                        <div class="circle-avatar"></div>
                                        <div class="archivment-info">
                                            <span>Лучший друг</span>
                                            <nav>Зафрендить 10 человек</nav>
                                        </div>

                                    </div>

                                </div>
                            </span>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <span
                                class="glyphicon glyphicon-tint glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <h3>Ваши друзья</h3>
                                <!-- здесь блоки с друзьями -->
                                <div class="friends">
                                    <div class="friend"></div>
                                </div>
                            </span>
                        </div>
                    </div>
                </section>
            </div>



        </article>




    </main>

    <script src="/JS/tabs.js"></script>


</body>