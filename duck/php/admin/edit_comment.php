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
            <div class="title_table ">
                <h1>Изменение записи</h1>
                <div class="btn_add">
                    <a href="comment.php">Вернуться</a>
                </div>
            </div>
       


        <?php
            if(isset($_GET['idA'])){
                $comment = $_GET['idA'];
            }

            echo "<form action=\"edit_com.php?idA=$comment\" class=\"table_add\" method=\"post\"> ";

            $qInfoComment = "SELECT * FROM comments WHERE id_comment='$comment'";
            addslashes($qInfoComment);
            $resInfoComment = mysqli_query($connect,$qInfoComment) or die(mysqli_error($connect));
            $InfoComment = mysqli_fetch_object($resInfoComment);
        ?>

        <div class="table_add_row">
            <label>Фото компании</label>
            <input type="file" name="comment_photo" value="<?php echo "".$InfoComment->photo_company.""; ?>">
            <label>Название компании</label>
            <input type="text" name="comment_name" value="<?php echo "".$InfoComment->name.""; ?>">
            <label>Ссылка на сайт</label>
            <input type="text" name="comment_link" value="<?php echo "".$InfoComment->link.""; ?>">
            <label>Дата добавления</label>
            <input type="text" name="comment_date" value="<?php echo "".$InfoComment->created_at.""; ?>">
            <label>Отзыв</label>
            <input type="text" name="comment_comment" value="<?php echo "".$InfoComment->comment.""; ?>">
            <button type="submit">Изменить</button>
        </div>
        </form>
        </div>

    </body>
</body>
</html>