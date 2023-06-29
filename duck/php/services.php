<?php
include "header.php";
?>
    <main>
        <div class="container">
            <div class="service_p">
                <p>Цена доставки зависит от сложности маршрута. Чтобы узнать точную цену, введите адрес забора и доставки.</p>
            </div>
        </div>
        <section class="bg_cost_delivery">
            <div class="container">
                <div class="cost_delivery">
                    <h2>Рассчитать доставку.</h2>
                </div>
                <div class="cost_delivery_form">
                    <div class="d2">
                        <form>
                            <input class="input" type="text" placeholder="Город отправки">
                        </form>
                        <form>
                            <input class="input" type="text" placeholder="Город назначения">
                        </form>
                            <div class="seldiv">
                                <select id="selectvalue">
                                    <option>Размер посылки</option>
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
        <section class="sale">
            <div class="container">
                <div class="sale_text">
                    <h2>Скидки и надбавки.</h2>
                    <div class="row">
                        <div class="sale_col">
                            <p>Заказ с доставкой в течение нескольких дней</p>
                            <span>100 р.</span>
                            
                        </div>
                        <div class="sale_col">
                            <p>Услуга погрузки / разгрузки</p>
                            <span>100 р.</span>
                        </div>
                        <div class="sale_col">
                            <p>Ожидание на адресе более 15 мин</p>
                            <span>40 / 5 мин.</span>
                        </div>
                        <div class="sale_col">
                            <p>Штраф за отмену заказа (спустя 5 мин после выезда курьера)</p>
                            <span>200 р.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sale">
            <div class="container">
                <div class="sale_text">
                    <h2>Дополнительные услуги.</h2>
                    <div class="row">
                        <div class="sale_col">
                            <p>Погрузка-разгрузка мелкогабаритных грузов (15 - 200 кг) </p>
                            <span>2 р. / кг</span>
                            
                        </div>
                        <div class="sale_col">
                            <p>Перевод выручки</p>
                            <span>+1% от суммы выручки </span>
                        </div>
                        <div class="sale_col">
                            <p>Услуга выкупа товара курьером</p>
                            <span>+2% от стоимости товара</span>
                        </div>
                        <div class="sale_col">
                            <p>Наложенный платеж</p>
                            <span>+2% от стоимости товара</span>
                        </div>
                    </div>
                </div>
                <div class="pay">
                    <p>Оплатить заказ возможно наличными курьеру или безналичным расчетом.</p>
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