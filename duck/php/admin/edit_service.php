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
                    <a href="uslugi.php">Вернуться</a>
                </div>
            </div>
       


        <?php
            if(isset($_GET['idA'])){
                $service = $_GET['idA'];
            }

            echo "<form action=\"edit_usl.php?idA=$service\" class=\"table_add\" method=\"post\"> ";

            $qInfoService = "SELECT * FROM service WHERE id_service='$service'";
            addslashes($qInfoService);
            $resInfoService = mysqli_query($connect,$qInfoService) or die(mysqli_error($connect));
            $InfoService = mysqli_fetch_object($resInfoService);
        ?>

        <div class="table_add_row">
            <label>Название</label>
            <input type="text" name="service_name" value="<?php echo "".$InfoService->service.""; ?>">
            <label>Заголовок</label>
            <input type="text" name="service_title" value="<?php echo "".$InfoService->title.""; ?>">
            <label>Цена</label>
            <input type="text" name="service_price" value="<?php echo "".$InfoService->price.""; ?>">
            <button type="submit">Изменить</button>
        </div>
        </form>
        </div>

    </body>
</body>
</html>