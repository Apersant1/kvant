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
                header('Location: /index.php')
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


            <div class="wrapper">
                <h1 class="title">Вкладки</h1>

                <nav id="tab-list">
                    <ul>
                        <li>Друзья</li>
                        <li>Достижения</li>
                        <li>Проекты</li>
                        <li>Текущий проект</li>
                    </ul>
                </nav>
                <div class="contents" id="contents">
                    <div class="container">



                        <!-- Здесь блок с друзьями -->
                        <article class="show top">


                            <section>
                                <h1>Ваши друзья</h1>

                                <div class="block-friends">
                                    <div class="block-friend">
                                        <div class="circle-avatar"><img src="/images/avatars/3790554_bangtan_boys.jpg"
                                                alt="">
                                            <!--Здесь аватарка друга  -->
                                        </div>
                                        <span>Александра Комарницкая</span>
                                    </div>
                                    <div class="block-friend">
                                        <div class="circle-avatar"><img src="/images/avatars/PHSnx_nzduo.jpg" alt="">
                                            <!--Здесь аватарка друга  -->
                                        </div>
                                        <span>Илья Афтайкин</span>
                                    </div>
                                    <div class="block-friend">
                                        <div class="circle-avatar"><img src="/images/avatars/5zU-J0WHAqU.jpg" alt="">
                                            <!--Здесь аватарка друга  -->
                                        </div>
                                        <span>Раевский</span>
                                    </div>
                                    <div class="block-friend">
                                        <div class="circle-avatar"><img src="/images/avatars/Byt-WnVVDh8.jpg" alt="">
                                            <!--Здесь аватарка друга  -->
                                        </div>
                                        <span>Вова Середин</span>
                                    </div>
                                    <div class="block-friend">
                                        <div class="circle-avatar"><img src="/images/avatars/kc7F1wi2wK8.jpg" alt="">
                                            <!--Здесь аватарка друга  -->
                                        </div>
                                        <span>Евгения Клименова</span>
                                    </div>
                                    <div class="block-friend">
                                        <div class="circle-avatar"><img src="/images/avatars/xhDD3quNHLA.jpg" alt="">
                                            <!--Здесь аватарка друга  -->
                                        </div>
                                        <span>Надежда Теньгаева</span>
                                    </div>
                                    





                                </div>

                            </section>

                        </article>
                        <!-- Здесь блок с друзьями -->


                        <!-- Здесь блок с достижениями -->
                        <article>
                            <section>
                                <h1>Ваши достижения</h1>

                                <div class="block-archivment">
                                    <div class="archivment">
                                        <div class="archivment-image"><img src="" alt=""></div>
                                    </div>
                                </div>

                            </section>
                        </article>


                        <!-- Здесь блок с достижениями -->

                        <!-- Здесь блок с пуллом проектов -->
                        <article>
                            <section>
                                <h1>Доступные проекты</h1>

                            </section>
                        </article>

                        <!-- Здесь блок с пуллом проектов -->

                        <!-- Здесь блок с текущим проектом юзера -->
                        <article>
                            <section>
                                <h1>Ваш текущий проект</h1>

                            </section>
                        </article>
                        <!-- Здесь блок с текущим проектом юзера -->

                    </div>
                </div>
            </div>


        </article>




    </main>


    <script type="text/javascript" src="./js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="./js/tabs.js"></script>








</body>