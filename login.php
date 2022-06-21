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
            background: url(includes/login-bg.png) no-repeat;
            background-position-y: center;
            background-size: 100%;
        }
    </style>
</head>
<body>
<p align="center">
    <img width="550px" height="550px" src="logo/logo.png" style="">
</p>


<!-- Форма авторизации -->
<form action="includes/signin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин (никнейм)">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
        Впервые у нас? - <a href="register.php">зарегистрируйтесь</a>
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