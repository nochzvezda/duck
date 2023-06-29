<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Mr.duck - админка</title> <!--название страницы-->
</head>

<body>
    <main>
        <h2 style="text-align:center;padding-top:100px">Вход в админку</h2>
        <form action="admin.php" method="post" style="text-align:center;padding-top:50px">
        <div class="form-group">
            <input type="text" placeholder="Введите логин" name="login">
        
        </div>
        <div class="form-group">
            <input type="text" placeholder="Введите пароль" style="margin-top:20px" name="password">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:20px">войти.</button>
        </form>
    </main>
</body>
