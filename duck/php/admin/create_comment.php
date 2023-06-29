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
<form action="create_com.php" class="table_add" method="post">
    <div class="table_add_row">
        <label>Фото компании</label>
        <input type="file" name="comment_photo">
    </div>

    <div class="table_add_row">
        <label>Название компании</label>
        <input type="text" name="comment_name">
    </div>
    <div class="table_add_row">
        <label>Ссылка на сайт</label>
        <input type="text" name="comment_link">
    </div>
    <div class="table_add_row">
        <label>Дата добавления</label>
        <input type="text" name="comment_date">
    </div>
    <div class="table_add_row">
        <label>Отзыв</label>
        <input type="text" name="comment_comment">
    </div>

    <div class="btn_add_one">
        <button type="submit">Создать</button>
    </div>
</form>