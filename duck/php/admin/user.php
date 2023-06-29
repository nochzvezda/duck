<?php     
    include "../../php-connect/connect.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_admin.css">
    <title>Админка-пользователи</title>
</head>
<body>
    <body>
        <div class="content">
        <a href="admin-panel.php">назад</a>
            <div class="title_table ">
                <h1>Пользователи</h1>
                <div class="btn_add">
                    <a href="create_user.php">Добавить запись</a>
                </div>
            </div>
            <div class="table">
                <div class="table_row title">
                    <div class="table_sell id">
                        <p>№</p>
                    </div>
                </div>
                <div class="table_sell2">
                    <p>Имя</p>
                </div>
                <div class="table_sell3">
                    <p>Фамилия</p>
                </div>
                <div class="table_sell4">
                    <p>Отчество</p>
                </div>
                <div class="table_sell5">
                    <p>Пароль</p>
                </div>
                <div class="table_sell6">
                    <p>Телефон</p>
                </div>
                <div class="table_sell7">
                    <p>Почта</p>
                </div>
                <div class="table_sell8">
                    <p>Индекс</p>
                </div>
                <div class="table_sell9">
                    <p>Пол</p>
                </div>
                <div class="table_sell10">
                    <p>Возраст</p>
                </div>
                <div class="table_sell act">
                    <p>Действие</p>
                </div>
            </div>
        </div>

            <?php
            $qInfoUser = "SELECT * FROM user";
            addslashes($qInfoUser);
            $resInfoUser = mysqli_query($connect, $qInfoUser) or die(mysqli_error($connect));

            while($InfoUser = mysqli_fetch_object($resInfoUser)){
                echo "
                
                <div class=\"table_row\">
                    <div class=\"table_sell id\">
                        <p>$InfoUser->id_user</p>
                    </div>
                    <div class=\"table_sell2\">
                        <p>$InfoUser->name</p>
                    </div>
                    <div class=\"table_sell3\">
                        <p>$InfoUser->lastname</p>
                    </div>
                    <div class=\"table_sell4\">
                        <p>$InfoUser->patronymic</p>
                    </div>
                    <div class=\"table_sell5\">
                    <p>$InfoUser->password</p>
                    </div>
                    <div class=\"table_sell6\">
                        <p>$InfoUser->phone</p>
                    </div>
                    <div class=\"table_sell7\">
                        <p>$InfoUser->email</p>
                    </div>
                    <div class=\"table_sell8\">
                    <p>$InfoUser->subscript</p>
                    </div>
                    <div class=\"table_sell9\">
                        <p>$InfoUser->id_gender</p>
                    </div>
                    <div class=\"table_sell10\">
                    <p>$InfoUser->age</p>
                </div>

                    
                    <div class=\"table_sell act\">
                        <a href=\"edit_user.php?idA=$InfoUser->id_user\"><img src=\"../img/edit.png\" width=\"30px\"></a>
                        <a href=\"?idD=$InfoUser->id_user\"><img src=\"../img/delete.png\" width=\"30px\" height=\"25px\"></a>
                    </div>
                </div>
                
                ";
            }

            ?>

            <?php

            if (isset($_GET['idD'])){
                $userD = $_GET['idD'];
                $qDeleteUser = "DELETE FROM `user` WHERE `id_user` = '$userD'";
                addslashes($qDeleteUser);
                $resDeleteUser= mysqli_query($connect, $qDeleteUser) or die(mysqli_error($connect));
            }
            ?>
        </div>
    </body>
</body>
</html>