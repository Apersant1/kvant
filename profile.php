<?php  

require "/DataBase/db.php";

 $data = $_POST;


?>
<meta charset="UTF-8">
<?php if(isset($_SESSION['logged_user']) ) :  ?>
<br>

Welcome, <?php echo  $_SESSION['logged_user']->login?>
<br>
<a href="/logout.php">Выйти</a>

<?php else : ?>
header('Location: /login.php')
<?php endif; ?>