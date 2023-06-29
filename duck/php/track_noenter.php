<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Mr.duck - отследить посылку</title>
</head>
<body>
    <div class="container">
        <div class="menu" id="navbar">
            <div class="wrapper">
               <div class="logo">
                <a href="index.html"><img src="./img/icon.png" alt=""></a>
                <a href="index.html">Mr<span style="color: rgb(199, 248, 3, 1)">.</span>duck</a>
               </div>
               <div class="d3">
                <form method="post" action="handler.php">
                    <input class="input" type="text" placeholder="отследить посылку">  
                    <script src="./main.js/track.js"></script>   
                </form>
               </div>
               <div class="menu_header"> 
                    <a href="about.html">О нас.</a>
                    <a href="services.html">Услуги.</a>
                    <a href="pay.html">Оплата.</a>
                    <a href="otsyv.html">Отзывы.</a>
                    <a href="contacts.html">Контакты.</a>
                    <a href="#" class="user"><img class="user" src="./img/person-1.svg" alt=""></a>
               </div>
            </div>
        </div>
        <script src="./main.js/menu.js"></script>
    </div>
    <main>
        <section class="watch"> <!--секция отслеживания товара-->
            <div class="container">
                <div class="watch_left"> 
                    <h2>Отследить отправление.</h2>
                </div>
                <div class="watch_right">
                    <div class="d1">
                        <form method="post" action="handler.php">
                            <input id="put" class="input" type="text" placeholder="Номер заказа">
                        </form>
                        <a href="./track.html" class="button">рассчитать.</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="documets">
            <div class="container">
                <div class="document_left">
                    <h2>Документы  для  получения  заказа.</h2>
                    <span>Документы, удостоверяющий личность на территории РФ для граждан</span>
                    <ul>
                        <li><span>Паспорт гражданина РФ</span></li>
                        <li><span>Удостоверение личности военнослужащего РФ</span></li>
                        <li><span>Военный билет</span></li>
                        <li><span>Временное удостоверение личности гражданина РФ (форма N 2П)</span></li>
                       </ul>
                </div>
                <div class="document_right">
                    <img src="./img/Object1.png" alt="">
                </div>
            </div>
        </section>
    </main>
    <?php
        include "footer.php";
    ?>
    <?php
        include "auth.php";
    ?>
</body>
</html>