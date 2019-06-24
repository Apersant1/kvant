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
            

        <div class="wrapper">
<header>
  <h1>Tab switch</h1>
</header>
<nav>
    <ul>
      <li class="gnav1">Tab1</li>
      <li class="gnav2">Tab2</li>
      <li class="gnav3">Tab3</li>
      <li class="gnav4">Tab4</li>
    </ul>
</nav>
<div class="contents" id="contents">
<div class="container">
<article id="page1" class="show top">
  <section>
    <h1>Tab1 Title</h1>
    <p>This is tab one.</p>
  </section>
</article>
<article id="page2">
  <section>
    <h1>Tab2 Title</h1>
    <p>This is tab two.</p>
  </section>
</article>
<article id="page3">
  <section>
    <h1>Tab3 Title</h1>
    <p>This is tab three.</p>
  </section>
</article>
<article id="page4">
  <section>
    <h1>Tab4 Title</h1>
    <p>This is tab four.</p>
  </section>
</article>
<article id="page5">
  <section>
    <h1>Tab5 Title</h1>
    <p>This is tab five</p>
  </section>
</article>
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