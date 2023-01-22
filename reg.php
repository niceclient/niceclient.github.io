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
    <link rel="stylesheet" href="site.css">
</head>
<body>


    <form action="vendor/signin.php" method="post">
      <h1 class="mainfont">NiceClient Cabinet Page</h1><br>
        <a class="mainfont">Логин</a>
        <input type="text" name="login" placeholder="Введите свой логин">
        <a class="mainfont">Пароль</a>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <a class="mainfont">
            У вас нет аккаунта?<a href="/register.php">Зарегистрируйтесь</a><a href="index.html">Вернуться назад</a>!
        </a>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
