<?php
session_start();
?>

<div class="authoriz"> <!--авторизация-->
        <div class="bg">
            <a class="btn-close"><img src="img/close.svg" alt="Закрыть" class="close-bt"></a>
            <div class="auth-container">
                <form action="auth.php" method="post">
                    <h1 class="authoriz-title">Вход в личный кабинет.</h1>
                    <input class="number-authoriz" type="text" name="phone" id="phone" placeholder="Ваш телефон">
                    <input class="number-authoriz" id="password-input" type="password" name="password" placeholder="Пароль" required>
                    <!-- <a href="#" class="password-control">Показать пароль</a> -->
                    <a class="to-register">
                        <p class="text-to-register">Нет доступа? Регистрация.</p>
                    </a>
                    <button class="border" type="submit">войти.</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <div class="register"> 
        <div class="bg">
            <a class="btn-close"><img src="img/close.svg" alt="Закрыть" class="close-bt_2"></a>
            <div class="auth-container">
                <form action="reg.php" method="post">
                    <h1 class="authoriz-title">Регистрация</h1>
                    <input class="number-authoriz" type="text" name="phone" id="phonee" placeholder="Ваш телефон" >
 
                    <input class="number-authoriz" type="email" name="email" placeholder="Ваш E-mail" required>
                    <input class="number-authoriz" type="password" name="password" placeholder="Пароль" >
                    <input class="number-authoriz" type="password" name="conpassword" placeholder="Повторите пароль" >
                    <a href="#" class="to-login">
                        <p class="text-to-login">Есть доступ? Войти.</p>
                    </a>
                    <button class="border" type="submit">готово.</button>
                </form>
            </div>
        </div>
    </div>

                       <!-- <script src="../assets/main.js/jquery/jquery.maskedinput.min.js"></script> 
                    <script src="../assets/main.js/jquery/jquery.maskedinput.js"></script> 
                    <script>
                    $('#phonee').mask('+7 (999) 999-99-99');
                    </script> 

         <script>
    $('body').on('click', '.password-control', function(){
        if ($('#password-input').attr('type') == 'password'){
            $(this).html('Скрыть пароль');
            $('#password-input').attr('type', 'text');
        } else {
            $(this).html('Показать пароль');
            $('#password-input').attr('type', 'password');
        }
        return false;
    }); 
    </script> -->