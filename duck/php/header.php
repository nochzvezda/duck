<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Mr.duck - главная</title> <!--название страницы-->
</head>

<body>
    <div class="container"> <!--контейнер-->
        <div class="menu open" id="navbar"><!--меню-->
            <div class="wrapper"> <!--блок чтобы растянуть меню-->
                <button class="header__burger-btn">
                    <span></span><span></span><span></span>
                </button>
                <div class="logo"><!--логотип-->
                    <a href="index.php"><img src="./img/icon.png" alt=""></a><!--Logomark-->
                    <a href="index.php">Mr<span style="color: rgb(199, 248, 3, 1)">.</span>duck</a><!--текст лого-->
                </div> <!--закрывающий тэг-->
                <div class="d3"> <!--div для формы-->
                    <form method="post" action="handler.php"> <!--сама форма-->
                        <input id="put" class="input" type="text" placeholder="отследить посылку">
                        <!--input ввода номера посылки-->
                        <script src="../assets/main.js/track.js"></script> <!--скрипт для отработки формы-->
                    </form>
                </div>
                <div class="menu_header"> <!--меню-->
                    <a href="about.php">О нас.</a> <!--ссылки-->
                    <a href="services.php">Услуги.</a>
                    <a href="pay.php">Оплата.</a>
                    <a href="otsyv.php">Отзывы.</a>
                    <a href="contacts.php">Контакты.</a>
                    <a href="#" class="user"><img class="user" src="./img/person-1.svg" alt=""></a>
                    <!--вход в личный кабинет-->
                </div>
            </div>
        </div>
        <script src="../assets/main.js/burger.js"></script>
        <script src="../assets/main.js/menu.js"></script>
        <script type="text/javascript" src="../assets/main.js/form.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    </div>