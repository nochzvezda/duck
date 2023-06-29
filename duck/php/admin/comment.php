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
    <title>Админка-отзывы</title>
</head>
<body>
    <body>
        <div class="content">
        <a href="admin-panel.php">назад</a>
            <div class="title_table ">
                <h1>Отзывы</h1>
                <div class="btn_add">
                    <a href="create_comment.php">Добавить запись</a>
                </div>
            </div>
            <div class="table">
                <div class="table_row title">
                    <div class="table_sell id">
                        <p>№</p>
                    </div>
                </div>
                <div class="table_sell2">
                    <p>фото компании</p>
                </div>
                <div class="table_sell3">
                    <p>Название</p>
                </div>
                <div class="table_sell4">
                    <p>ссылка</p>
                </div>
                <div class="table_sell5">
                    <p>дата добавления</p>
                </div>
                <div class="table_sell6">
                    <p>отзыв</p>
                </div>
                <div class="table_sell act">
                    <p>Действие</p>
                </div>
            </div>
        </div>

            <?php
            $qInfoComment = "SELECT * FROM comments";
            addslashes($qInfoComment);
            $resInfoComment = mysqli_query($connect, $qInfoComment) or die(mysqli_error($connect));

            while($InfoComment= mysqli_fetch_object($resInfoComment)){
                echo "
                
                <div class=\"table_row\">
                    <div class=\"table_sell id\">
                        <p>$InfoComment->id_comment</p>
                    </div>
                    <div class=\"table_sell2\">
                        <p> <img src=\" $InfoComment->photo_company\"> </p>
                    </div>
                    <div class=\"table_sell3\">
                        <p>$InfoComment->name</p>
                    </div>
                    <div class=\"table_sell4\">
                        <p>$InfoComment->link</p>
                    </div>
                    <div class=\"table_sell5\">
                    <p>$InfoComment->created_at</p>
                    </div>
                    <div class=\"table_sell6\">
                    <p>$InfoComment->comment</p>
                    </div>

                    
                    <div class=\"table_sell act\">
                        <a href=\"edit_comment.php?idA=$InfoComment->id_comment\"><img src=\"../img/edit.png\" width=\"30px\"></a>
                        <a href=\"?idD=$InfoComment->id_comment\"><img src=\"../img/delete.png\" width=\"30px\" height=\"25px\"></a>
                    </div>
                </div>
                
                ";
            }

            ?>

            <?php

            if (isset($_GET['idD'])){
                $commentD = $_GET['idD'];
                $qDeleteComment = "DELETE FROM `comments` WHERE `id_comment` = '$commentD'";
                addslashes($qDeleteComment);
                $resDeleteComment = mysqli_query($connect, $qDeleteComment) or die(mysqli_error($connect));
            }
            ?>
        </div>
    </body>
</body>
</html>