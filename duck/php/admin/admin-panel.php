<?php 
include "../../php-connect/connect.php";
session_start();
// var_dump($_SESSION['login']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Mr.duck - админка</title>
</head>
<body>
    <main>
    <nav class="navbar sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="uslugi.php">Услуги</a>
    <a class="navbar-brand" href="comment.php">Отзывы</a>
    <a class="navbar-brand" href="user.php">Пользователи</a>
    </div>
    </nav>
        <div style="text-align:center;padding-top:40px">
        <a href="login.php">вернуться</a>
        <?php if(!empty($_SESSION['login'])) :?>
            
           <?php echo "<h1>Добро пожаловать,</h1> ".$_SESSION['login'];?> <br>


            <?php else: echo '<h2>Вы что хакер?</h2>'; ?>


            <?php endif ?>
        </div>
    </main>
</body>