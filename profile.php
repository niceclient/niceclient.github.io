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
    <link rel="stylesheet" href="site.css">
    <link rel="stylesheet" href="button29.css">
</head>
<body>

    <div align="center">
      <a href="index.html" class="text"><img class="icon" src="nctextshop.png">
      <br>
      <div class="table">
        <a class="mainfont"><big>Личный кабинет аккаунта <?= $_SESSION['user']['full_name'] ?></big></a><br>
         <p><p><div class="parameters" align="left">
          <div class="paramname">
            <img height="28" src="uid.png"><h3 class="mainfont">⠀UID</h3>
          </div>
          <div class="paramtext">
            <h3 class="mainfont"><?= $_SESSION['user']['id'] ?></h3>
          </div>
      </div>
      <p><p><div class="parameters" align="left">
       <div class="paramname">
         <img height="28" src="login.png"><h3 class="mainfont">⠀Логин</h3>
       </div>
       <div class="paramtext">
         <h3 class="mainfont"><?= $_SESSION['user']['full_name'] ?></h3>
       </div>
           </div>
     <p><p><div class="parameters" align="left">
        <div class="paramname">
          <img height="28" src="login.png"><h3 class="mainfont">⠀Группа</h3>
        </div>
        <div class="paramtext">
          <h3 class="mainfont"><?= $_SESSION['user']['group'] ?></h3>
        </div>
      </div>
      <p><p><div class="parameters" align="left">
       <div class="paramname">
         <img height="28" src="time.png"><h3 class="mainfont">⠀Клиент оплачен до</h3>
       </div>
       <div class="paramtext">
         <h3 class="mainfont"><?= $_SESSION['user']['softdate'] ?></h3>
       </div>
      </div>
    <p><p><div class="parameters" align="left">
    <div class="paramname">
      <img height="28" src="email.png"><h3 class="mainfont">⠀E-Mail</h3>
    </div>
    <div class="paramtext">
      <h3 class="mainfont"><?= $_SESSION['user']['email'] ?></h3>
    </div>
    </div>
    <p><p><div class="parameters" align="left">
    <div class="paramname">
      <img height="28" src="hwid.png"><h3 class="mainfont">⠀HWID</h3>
    </div>
    <div class="paramtext">
      <h3 class="mainfont"><?= $_SESSION['user']['hwid'] ?></h3>
    </div>
    </div>
    <p><p><div class="parameters" align="left">
     <div class="paramname">
       <img height="28" src="password.png"><h3 class="mainfont">⠀Активация ключа</h3>
     </div>
     <div class="paramtext">
       <h3 class="mainfont">Не работает</h3>
     </div>
    </div>
    <br>
    <div class="flex">
     <a href="https://vk.com/niceclient" class="button-29"><img src="vk.png" height="25">⠀Группа ВК</a><a>⠀⠀</a>
     <a href="vendor/logout.php" class="button-29"><img src="exit.png" height="25">⠀Выход</a><a>⠀⠀</a>
     <?php
         if ($_SESSION['user']['hwid'] !== 'Неизвестен') {
             echo '<a href="dwnld.php" class="button-29"><img src="down.png" height="25">⠀Скачать лоадер</a><a>⠀⠀</a>';
         }
     ?>
     <a href="promocodes.html" class="button-29"><img src="promocodes.png" height="25">⠀Мои промокоды</a><a>⠀⠀</a>
    </div>
    </div>
    <h3 class="text">NiceClient</h3>
    <h2 class="text3">ИП Ушаков Дмитрий Сергеевич</h2>
    <h2 class="text3">ИНН: 000000000001</h2>
    <h2 class="text3">ОГРНИП: 192348925312</h2>
    <br>
    <h2 class="mainfont">Copyright © NiceClient 2023</h2>

</body>
</html>
