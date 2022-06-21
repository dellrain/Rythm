<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        html {
            height: 100%;
        }

        body {
            background: url(includes/register-bg.png) no-repeat;
            background-position-y: center;
            background-size: 100%;
        }
    </style>
</head>
<body>
<!-- Форма регистрации -->
<form action="includes/signup.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите своё полное имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой никнейм">
    <label>Электронный адрес</label>
    <input type="email" name="email" placeholder="Введите адрес своей почты">

    <label>Аватарка</label>
    <input type="file" name="avatar">

    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Зарегистрироваться</button>
    <p>
        Уже есть аккаунт? - <a href="login.php">войти</a>
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset ($_SESSION['message']);
    ?>
</form>
<p style="position: absolute; top: 10px; align=" center">
<a href="index.html" onclick="increaseCountPagesVisited()">
    <button class="content">На главную</button>
</a>
<a href="donate.html" onclick="increaseCountPagesVisited()">
    <button class="content">Donate</button>
</a>
<a href="map.html" onclick="increaseCountPagesVisited()">
    <button class="content">Связь с нами</button>
</a>
<a href="gallery.html" onclick="increaseCountPagesVisited()">
    <button class="content">Фотогалерея</button>
</a>
<a href="about.html" onclick="increaseCountPagesVisited()">
    <button class="content">Об авторе</button>
</a>
<a href="game/game.html" onclick="increaseCountPagesVisited()">
    <button class="content">Игра</button>
</a>
<script src="javascript/script.js"></script>
</body>
</html>