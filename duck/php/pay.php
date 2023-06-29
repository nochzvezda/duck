<?php
include "header.php";
?>
    <main>
        <section class="pay"> <!--секция оплаты-->
            <div class="container">
                <div class="cost">
                    <div class="cost_text"><h1>Оплата услуг. </h1></div>
                    <div class="d1">
                        <form>
                            <input class="input" type="text" placeholder="Номер платежа">
                        </form>
                        <form>
                            <input class="input" type="text" placeholder="ФИО плательщика">
                        </form>
                        <form>
                            <input class="input" type="text" placeholder="Сумма оплаты">
                        </form>
                        <form>
                            <input class="input" type="text" placeholder="E-mail для чека">
                        </form>
                        <div class="check"> <!--чек боксы-->
                            <div class="check_box">
                                <input type="checkbox" class="custom-checkbox" id="1" name="happy" value="yes">
                                <label for="1">Ознакомлен с Политикой Сбора ПДн</label><!--текст для чек бокса-->
                              </div>
                              <div class="check_box">
                                <input type="checkbox" class="custom-checkbox" id="2" name="happy" value="yes">
                                <label for="2">Даю согласие на обработку ПДн</label>
                              </div>
                        </div>
                    </div>
                    <a href="./track.html" class="button">оплатить.</a>
                </div>

                <div class="attention"> <!--блок "внимание"-->
                    <div class="img"><img src="./img/duck3.png" alt=""></div>
                    <div class="attention_bg">
                       <div class="attention_bg_img">
                        <img src="./img/paiment1.png" alt="">
                        <img src="./img/paiment2.png" alt="">
                        <img src="./img/paiment3.png" alt="">
                        <img src="./img/paiment4.png" alt="">
                       </div>
                        
                        <p><span style="color: rgb(199, 248, 3, 1)">Внимание!</span> Платеж может быть осуществлен только в российских рублях и только по счетам, выставленным в российских рублях. Оплата в другой валюте невозможна. </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pay">
            <div class="container">
                <div class="about_text">
                    <h2>
                        Возврат денежных средств.
                    </h2>
                    <p>В случае необходимости возврата ошибочной оплаты денежных средств (наличными в кассу, безналичным платежом на счет, при оплате на сайте), либо для возврата неиспользованного аванса —заполните письмо на возврат по указанной ниже форме. <br> <br>

                        Если у вас нет закрепленного кредитного контролера — передайте данное письмо в офис СДЭК вашего города.</p>

                    <a href="#">Заявление на возврат</a>
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