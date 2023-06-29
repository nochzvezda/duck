<?php
session_start();
?>

<section class="cost_delivery"> <!--секция с оформлением доставки-->
            <div class="container">
                <div class="cost">
                    <div class="cost_text">
                        <h2>Оформить доставку.</h2>
                        <p>Персональный менеджер свяжется с вами в ближайшее время</p>
                    </div>

                    <div class="d1">
                        <form>
                            <input class="input" type="text" name="city1" placeholder="Город отправки">
                        </form>
                        <form>
                            <input class="input" type="text"  name="city2" placeholder="Город назначения">
                        </form>
                        <form>
                            <input class="input" type="text" name="box" placeholder="Размер посылки">
                        </form>
                        <form>
                            <input class="input" type="name" name="name" placeholder="Ваше Имя">
                        </form>
                        <form>
                            <input class="input" type="email" name="email" placeholder="Ваш E-mail">
                        </form>
                        <form>
                            <input class="input" type="phone" name="phone" placeholder="Номер телефона">
                        </form>
                    </div>
                    <button class="border" type="submit">войти.</button>
                </div>
            </div>
        </section>