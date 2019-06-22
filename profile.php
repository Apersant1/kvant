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
  <ul class="tabs clearfix" data-tabgroup="first-tab-group">
    <li><a href="#tab1" class="active">Tab 1</a></li>
    <li><a href="#tab2">Tab 2</a></li>
    <li><a href="#tab3">Tab 3</a></li>
    <li><a href="#tab4">Tab 4</a></li>
    <li><a href="#tab5">Tab 5</a></li>
  </ul>
  <section id="first-tab-group" class="tabgroup">
    <div id="tab1">
      <h2>Heading 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla deserunt consectetur ratione id tempore laborum laudantium facilis reprehenderit beatae dolores ipsum nesciunt alias iusto dicta eius itaque blanditiis modi velit.</p>
    </div>
    <div id="tab2">
      <h2>Heading 2</h2>
      <p>Adipisci autem obcaecati velit natus quos beatae explicabo at tempora minima voluptates deserunt eum consectetur reiciendis placeat dolorem repellat in nam asperiores impedit voluptas iure repellendus unde eveniet accusamus ex.</p>
    </div>
    <div id="tab3">
      <h2>Heading 3</h2>
      <p>Atque ratione soluta laboriosam illo inventore amet ipsum aliquam assumenda harum provident nam accusantium neque debitis obcaecati maxime officia saepe ad ducimus in quam libero vero quasi. Saepe sit nisi?</p>
    </div>
    <div id="tab4">
      <h2>Heading 4</h2>
      <p>Quidem perferendis id sapiente cumque ullam repellendus dolorum odit rerum quibusdam tempora voluptatibus ipsum. Maiores laborum velit aperiam dicta quisquam assumenda at esse exercitationem culpa sequi porro minus ipsa aut.</p>
    </div>
    <div id="tab5">
      <h2>Heading 5</h2>
      <p>Iste eligendi ratione libero impedit quos necessitatibus labore corporis deserunt quo porro hic eius delectus ea ad amet dolore officiis debitis! Libero officia magnam consequuntur dignissimos molestias quia modi repellat.</p>
    </div>
  </section>
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