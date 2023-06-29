<?php
include "header.php";
?>
    <main>
        <section class="watch">
            <div class="container">
                <div class="watch_left">
                    <h2>Отследить отправление.</h2>
                </div>
                <div class="watch_right">
                    <div class="d1">
                        <form method="post" action="handler.php">
                            <input class="input" type="text" placeholder="Номер заказа">
                        </form>
                        <a href="./track.html" class="button">рассчитать.</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="track"> <!--секция отслеживания товара-->
            <div class="container">
                <div class="detail">
                    <div class="detail_card">
                        <img src="./img/создан.png" alt="">
                        <p>Оформлен.</p>
                    </div>
                    <div class="detail_card">
                        <img src="./img/путь.png" alt="">
                        <p>В пути.</p>
                    </div>
                    <div class="detail_card">
                        <img src="./img/курьер.png" alt="">
                        <p>Доставляет курьер.</p>
                    </div>
                    <div class="detail_card">
                        <img src="./img/выдача.png" alt="">
                        <p>Готов к выдаче.</p>
                    </div>
                    <div class="detail_card">
                        <img src="./img/done.png" alt="">
                        <p>Вручен.</p>
                    </div>
                </div>
                  
                 
            </div>
        </div>
        <section class="documets"> <!--секция документов-->
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