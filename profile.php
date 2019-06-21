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


            <section class="design-process-section" id="process-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- design process steps-->
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                                <li role="presentation" class="active"><a href="#discover" aria-controls="discover"
                                        role="tab" data-toggle="tab"><i class="fa fa-search" aria-hidden="true"></i>
                                        <p>Discover</p>
                                    </a></li>
                                <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab"
                                        data-toggle="tab"><i class="fa fa-send-o" aria-hidden="true"></i>
                                        <p>Strategy</p>
                                    </a></li>
                                <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab"
                                        data-toggle="tab"><i class="fa fa-qrcode" aria-hidden="true"></i>
                                        <p>Optimization</p>
                                    </a></li>
                                <li role="presentation"><a href="#content" aria-controls="content" role="tab"
                                        data-toggle="tab"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                        <p>Content</p>
                                    </a></li>
                                <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab"
                                        data-toggle="tab"><i class="fa fa-clipboard" aria-hidden="true"></i>
                                        <p>Reporting</p>
                                    </a></li>
                            </ul>
                            <!-- end design process steps-->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="discover">
                                    <div class="design-process-content">
                                        <h3 class="semi-bold">Discovery</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="strategy">
                                    <div class="design-process-content">
                                        <h3 class="semi-bold">Strategy</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="optimization">
                                    <div class="design-process-content">
                                        <h3 class="semi-bold">Optimization</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="content">
                                    <div class="design-process-content">
                                        <h3 class="semi-bold">Content</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="reporting">
                                    <div class="design-process-content">
                                        <h3>Reporting</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>



        </article>




    </main>

    <script src="/JS/tabs.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>