<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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
            background: url(includes/profile-bg.png) no-repeat;
            background-position-y: center;
            background-size: 100%;
        }
    </style>
</head>
<body>
<!-- Профиль -->
<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="150" alt="">
    <h2 style="margin: 5px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href=""><?= $_SESSION['user']['email'] ?></a>
    <a href="includes/logout.php" class="logout">Выход</a>
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