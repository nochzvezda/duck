<?php
include "header.php";
session_start();
?>
    <main>
        <section class="lk">
            <div class="container">
                <div class="order">
                    <h2>Добро пожаловать в личный кабинет.</h2>
                </div>
            </div>
        </section>

        <div class="progress_bar"> <!--прогресс бар-->
            <div class="container">
               <p>Закажите 100 доставок в течение месяца и получите скидку 5% в следующем месяце.</p>
               <div id="myProgress">
                <div id="myBar"></div>
              </div>
              <p class="procent">5%</p>
            </div>
        </div>

        <section class="sale"> <!--секция статусов заказа-->
            <div class="container">
            <?php echo "<h4>Ваш телефон:</h4> ".$_SESSION['phone'];?>
                <div class="sale_text">
                    <div class="row">
                        <div class="sale_col_1">
                           <h2>Заказ</h2>
                           <h2>Статус</h2>
                        </div>
                        <div class="sale_col">
                        <?php echo $_SESSION['id_order'];?>
                            <span>доставлен</span>
                        </div>
                        <div class="sale_col">
                        <?php echo $_SESSION['id_order'];?>
                            <span>в пути</span>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
    </main>
    <?php
        include "footer.php";
    ?>
    <script src="pr_bar.js"></script>
</body>
</html>