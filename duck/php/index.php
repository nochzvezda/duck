<?php
include "header.php";
session_start();
?>

 <div class="message">
 <?php
        if(isset($_SESSION['message'])){
            echo'<p class="msg">' . $_SESSION['message'] . '</p>';
        } else{
            echo ' ';
        }

        unset($_SESSION['message']);
        ?>
        </div> 


    <main>
        <section class="main_header"> <!--секция первого блока-->
            <div class="container">
                <div class="left"> <!--левая часть сеции с текстом-->
                    <h1>Быстрая курьерская доставка в Москве.</h1> <!--заголовок первого порядка-->
                    <h3><span style="color: rgba(240, 179, 188, 1)">"СЮДА"</span> промокод на первый заказ</h3>
                    <!--заголовок третьего порядка-->
                    <p>Сервис срочной курьерской доставки по городу. Решаем вопрос доставки и логистики</p> <!--текст-->
                    <a href="#" class="button">оформить.</a> <!--кнопка-->
                </div>
                <div class="right"> <!--правая часть секции-->
                    <img src="./img/3d-illustration-of-children-s-toy-duck-car_23-21493453041.png" alt="">
                    <!--картинка-->
                </div>
            </div>
        </section>


        <section class="bg_cost_delivery"> <!--секция рассчета доставки-->
            <div class="container">
                <div class="cost_delivery">
                    <h2>Рассчитать доставку.</h2> <!--заголовок третьего порядка-->
                </div>
                <div class="cost_delivery_form">
                    <div class="d2">
                        <form>
                            <input class="input" type="text" placeholder="Город отправки">
                        </form>
                        <form>
                            <input class="input" type="text" placeholder="Город назначения">
                        </form>

                        <div class="seldiv"> <!--выпадающий список-->
                                <select id="selectvalue">
                                    <option>Размер посылки</option> <!--текст в выпадающим списке-->
                                    <option>Конверт, 42x36x5 см, до 2 кг</option>
                                    <option>Короб XS, 17x12x9 см, до 0.5 кг</option>
                                    <option>Короб S, 23x19x10 см, до 2 кг</option>
                                    <option>Короб M, 33x25x15 см, до 5 кг</option>
                                    <option>Короб L, 31x25x38 см, до 12 кг</option>
                                    <option>Короб XL, 60x35x30 см, до 18 кг</option>
                                    <option>Большой короб, ящик, 60x60x30 см, до 20 кг</option>
                                </select>
                            </div>   
                    </div>
                </div>
                <div class="button_form">
                    <a href="" class="button">рассчитать.</a>
                </div>

                </div>
        </section>

        <section class="fly_delivery"> <!--секция с текстом и картинкой-->
            <div class="container">
                <div class="fly">
                    <div class="fly_left">
                        <h2>Летаем за границу на 5-7 дней <span style="color: rgba(240, 179, 188, 1)">быстрее.</span>
                        </h2>
                        <p>Теперь доставляем посылки в США, Канаду, ЕС и другие страны только авиатранспортом</p>
                    </div>
                    <div class="fly_right">
                        <img src="./img/airplane.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="facts"> <!--секция вактов о компании-->
            <div class="container">
                <div class="facts_elements">
                    <div class="fact_element">
                        <div class="facts">
                            <h4>> 400</h4> <!--заголовок четвертого порядка-->
                            <span>городов</span>
                            <p> России для логистики
                                Ваших продаж.</p>
                        </div>
                        <div class="facts">
                            <h4>15</h4>
                            <span>минут</span>
                            <p>на обработку Ваших заказов.</p>
                        </div>
                        <div class="facts">
                            <h4>96%</h4>
                            <span>получателей</span>
                            <p> довольны работой наших курьеров.</p>
                        </div>
                        <div class="facts">
                            <h4>24/7</h4>
                            <span>чат-поддержка</span>
                            <p>круглосуточно и быстро решаем любые Ваши вопросы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include "new-order.php";
    ?>
        
    </main>
    <?php
        include "footer.php";
    ?>

    <?php
        include "autorize.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/main.js/form.js"></script>
</body>
</html>