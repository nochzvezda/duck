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
            <div class="title_table ">
                <h1>Изменение записи</h1>
                <div class="btn_add">
                    <a href="user.php">Вернуться</a>
                </div>
            </div>
       


        <?php
            if(isset($_GET['idA'])){
                $user = $_GET['idA'];
            }

            echo "<form action=\"edit_us.php?idA=$user\" class=\"table_add\" method=\"post\"> ";

            $qInfoUser = "SELECT * FROM user WHERE id_user='$user'";
            addslashes($qInfoUser);
            $resInfoUser = mysqli_query($connect,$qInfoUser) or die(mysqli_error($connect));
            $InfoUser = mysqli_fetch_object($resInfoUser);
        ?>

        <div class="table_add_row">
            <label>Имя</label>
            <input type="text" name="user_name" value="<?php echo "".$InfoUser->name.""; ?>">
            <label>Фамилия</label>
            <input type="text" name="user_lastname" value="<?php echo "".$InfoUser->lastname.""; ?>">
            <label>Отчество</label>
            <input type="text" name="user_patronymic" value="<?php echo "".$InfoUser->patronymic.""; ?>">
            <label>Пароль</label>
            <input type="text" name="user_password" value="<?php echo "".$InfoUser->password.""; ?>">
            <label>Телефон</label>
            <input type="text" name="user_phone" value="<?php echo "".$InfoUser->phone.""; ?>">
            <label>Почта</label>
            <input type="text" name="user_email" value="<?php echo "".$InfoUser->email.""; ?>">
            <label>Индекс</label>
            <input type="text" name="user_index" value="<?php echo "".$InfoUser->subscript.""; ?>">
            <label>Пол</label>
            <input type="text" name="user_gender" value="<?php echo "".$InfoUser->id_gender.""; ?>">
            <label>Возраст</label>
            <input type="text" name="user_age" value="<?php echo "".$InfoUser->age.""; ?>">
            <button type="submit">Изменить</button>
        </div>
        </form>
        </div>

    </body>
</body>
</html>