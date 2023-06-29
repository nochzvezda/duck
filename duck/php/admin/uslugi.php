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
    <title>Админка-услуги</title>
</head>
<body>
    <body>
        <div class="content">
        <a href="admin-panel.php">назад</a>
            <div class="title_table ">
                <h1>Услуги</h1>
                <div class="btn_add">
                    <a href="create_uslugi.php">Добавить запись</a>
                </div>
            </div>
            <div class="table">
                <div class="table_row title">
                    <div class="table_sell id">
                        <p>№</p>
                    </div>
                </div>
                <div class="table_sell2">
                    <p>Заголовок</p>
                </div>
                <div class="table_sell3">
                    <p>Название</p>
                </div>
                <div class="table_sell4">
                    <p>Цена</p>
                </div>
                <div class="table_sell act">
                    <p>Действие</p>
                </div>
            </div>
        </div>

            <?php
            $qInfoService = "SELECT * FROM service";
            addslashes($qInfoService);
            $resInfoService = mysqli_query($connect, $qInfoService) or die(mysqli_error($connect));

            while($InfoService = mysqli_fetch_object($resInfoService)){
                echo "
                
                <div class=\"table_row\">
                    <div class=\"table_sell id\">
                        <p>$InfoService->id_service</p>
                    </div>
                    <div class=\"table_sell2\">
                        <p>$InfoService->title</p>
                    </div>
                    <div class=\"table_sell3\">
                        <p>$InfoService->service</p>
                    </div>
                    <div class=\"table_sell4\">
                        <p>$InfoService->price</p>
                    </div>
                    
                    <div class=\"table_sell act\">
                        <a href=\"edit_service.php?idA=$InfoService->id_service\"><img src=\"../img/edit.png\" width=\"30px\"></a>
                        <a href=\"?idD=$InfoService->id_service\"><img src=\"../img/delete.png\" width=\"30px\" height=\"25px\"></a>
                    </div>
                </div>
                
                ";
            }

            ?>

            <?php

            if (isset($_GET['idD'])){
                $serviceD = $_GET['idD'];
                $qDeleteService = "DELETE FROM `service` WHERE `id_service` = '$serviceD'";
                addslashes($qDeleteService);
                $resDeleteService = mysqli_query($connect, $qDeleteService) or die(mysqli_error($connect));
            }
            ?>
        </div>
    </body>
</body>
</html>