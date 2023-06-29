<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_admin.css">
    <title>Добавить запись</title>
</head>
<body>
    
</body>
</html>
<form action="create_usl.php" class="table_add" method="post">
    <div class="table_add_row">
        <label>Название услуги</label>
        <input type="text" name="service_name">
    </div>

    <div class="table_add_row">
        <label>Заголовок услуги</label>
        <input type="text" name="service_title">
    </div>
    <div class="table_add_row">
        <label>Цена</label>
        <input type="text" name="service_price">
    </div>

    <div class="btn_add_one">
        <button type="submit">Создать</button>
    </div>
</form>