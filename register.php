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
    <link rel="stylesheet" href="button29.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <a class="mainfont">Логин</a><br>
        <input class="input" type="text" name="login" placeholder="Введите свой логин"><br>
        <al class="mainfont">Почта</a><br>
        <input class="input" type="email" name="email" placeholder="Введите адрес своей почты"><br>
        <a class="mainfont">Изображение профиля</a><br>
        <input class="input" type="file" name="avatar"><br>
        <a class="mainfont">Пароль</a><br>
        <input class="input" type="password" name="password" placeholder="Введите пароль"><br>
        <a class="mainfont">Подтверждение пароля</a><br>
        <input class="input" type="password" name="password_confirm" placeholder="Подтвердите пароль"><br>
        <button class="button-29" type="submit">Войти</button><br>
        <p>
            У вас уже есть аккаунт? - <a href="/reg.php">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
