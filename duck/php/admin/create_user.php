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
<form action="create_us.php" class="table_add" method="post">
    <div class="table_add_row">
        <label>Имя</label>
        <input type="text" name="user_name">
    </div>

    <div class="table_add_row">
        <label>Фамилия</label>
        <input type="text" name="user_lastname">
    </div>
    <div class="table_add_row">
        <label>Отчество</label>
        <input type="text" name="user_patronymic">
    </div>
    <div class="table_add_row">
        <label>Пароль</label>
        <input type="text" name="user_password">
    </div>
    <div class="table_add_row">
        <label>Телефон</label>
        <input type="text" name="user_phone">
    </div>

    <div class="table_add_row">
        <label>Почта</label>
        <input type="text" name="user_email">
    </div>

    <div class="table_add_row">
        <label>Индекс</label>
        <input type="text" name="user_index">
    </div>
    <div class="table_add_row">
        <label>Пол</label>
        <input type="text" name="user_gender">
    </div>
    <div class="table_add_row">
        <label>Возраст</label>
        <input type="text" name="user_age">
    </div>

    <div class="btn_add_one">
        <button type="submit">Создать</button>
    </div>
</form>