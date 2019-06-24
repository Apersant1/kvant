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
            <div class="tabs-container">
                <ul class="tabs">
                    <li class="active">
                        <a href="">Part 1</a>
                    </li>
                    <li>
                        <a href="">Part 2</a>
                    </li>
                    <li>
                        <a href="">Part 3</a>
                    </li>
                </ul>
                <div class="tabs-content">
                    <div class="tabs-panel active" data-index="0">
                        <!-- content here -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra erat at dui dictum, ac semper ante blandit. Suspendisse eleifend felis augue, et egestas odio tempor sed. Quisque sed justo eget arcu viverra sodales. Suspendisse a venenatis
        augue, imperdiet elementum lorem. Donec neque dui, fringilla vitae ultricies vel, scelerisque non ante. Aliquam erat volutpat. Donec erat velit, finibus at lobortis nec, venenatis ac ipsum. Proin blandit urna turpis, quis euismod dui elementum
        quis. Vestibulum hendrerit eget est ornare sollicitudin. Cras sit amet mi ut dui venenatis maximus. Donec blandit libero risus, non cursus mauris dignissim a. Donec vitae risus condimentum, rhoncus nibh in, scelerisque massa. Vivamus semper laoreet
        neque at molestie. Integer nulla nisl, accumsan convallis bibendum ac, suscipit ac leo. Nunc at odio interdum, interdum arcu eu, ullamcorper felis.</p>
                        
                    </div>
                    <div class="tabs-panel" data-index="1">
                        <!-- content here -->
                    </div>
                    <div class="tabs-panel" data-index="2">
                        <!-- content here -->
                    </div>
                </div>
            </div>




        </article>




    </main>

    <script src="/JS/tabs.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>






</body>