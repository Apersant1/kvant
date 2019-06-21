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
            <ul id="tabs">
                <li><a href="#" name="tab1">One</a></li>
                <li><a href="#" name="tab2">Two</a></li>
                <li><a href="#" name="tab3">Three</a></li>
                <li><a href="#" name="tab4">Four</a></li>
            </ul>

            <div id="content">
                <div id="tab1">
                    <h2>Lorem ipsum sit amet</h2>
                    <p>Praesent risus nisi, iaculis nec condimentum vel, rhoncus vel dolor. Aenean nisi lectus, varius
                        nec tempus id, dapibus non quam.</p>
                    <p>Suspendisse ac libero mauris. Cras lacinia porttitor urna, vitae molestie libero posuere et.
                        Mauris turpis tortor, mollis non vulputate sit amet, rhoncus vitae purus.</p>

                    <h3>Pellentesque habitant</h3>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                </div>
                <div id="tab2">
                    <h2>Vivamus fringilla suscipit justo</h2>
                    <p>Aenean dui nulla, egestas sit amet auctor vitae, facilisis id odio. Donec dictum gravida feugiat.
                    </p>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras
                        pretium elit et erat condimentum et volutpat lorem vehicula</p>

                    <p>Morbi tincidunt pharetra orci commodo molestie. Praesent ut leo nec dolor tempor eleifend.</p>
                </div>
                <div id="tab3">
                    <h2>Phasellus non nibh</h2>
                    <p>Non erat laoreet ullamcorper. Pellentesque magna metus, feugiat eu elementum sit amet, cursus sed
                        diam. Curabitur posuere porttitor lorem, eu malesuada tortor faucibus sed.</p>
                    <h3>Duis pulvinar nibh vel urna</h3>
                    <p>Donec purus leo, porttitor eu molestie quis, porttitor sit amet ipsum. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec accumsan ornare
                        elit id imperdiet. </p>

                    <p>Suspendisse ac libero mauris. Cras lacinia porttitor urna, vitae molestie libero posuere et. </p>
                </div>
                <div id="tab4">
                    <h2>Cum sociis natoque penatibus</h2>
                    <p>Magnis dis parturient montes, nascetur ridiculus mus. Nullam ac massa quis nisi porta mollis
                        venenatis sit amet urna. Ut in mauris velit, sed bibendum turpis.</p>
                    <p>Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus
                        sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                        egestas. Praesent bibendum sagittis libero.</p>
                    <h3>Imperdiet sem interdum nec</h3>

                    <p>Mauris rhoncus tincidunt libero quis fringilla.</p>
                </div>
            </div>
        </article>




    </main>

    <script src="/JS/tabs.js"></script>


</body>