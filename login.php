<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Форма авторизации</title>
</head>
<body>



<div class="container">
    <form action="" class="form-sign-in" method="post">
        <h2>Авторизация</h2>
        <label for="email">Введите вашу почту:</label>
        <input type="email" id="email" name="email" class="form-control"  required >
        <br>
        <label for="pwd">Введите пароль:</label>
        <input type="password" id="pwd" name="pwd" class="form-control" required >
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Войти</button>
        <a href="index.php" class="btn btn-lg btn-primary btn-block">Регистрация</a>
    </form>
</div>
<?php
session_start();
require ('connect.php');
/** @var object $connection */
if (isset($_POST['email']) && isset($_POST['pwd'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM users WHERE email = '$email' AND pwd = '$pwd'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if ($count == 1){
        $_SESSION['email'] = $email;
    }else{
        $fmsg = "Ошибка";
    }
}

    if (isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        echo "С возвращением" . "&nbsp;". $email . "!". "<br>";
        echo "Вы вошли!"."<br>";
        echo "<a href = 'logout.php' class = 'btn btn-lg btn-primary'>Выход</a>";
    }
?>
</body>
</html>
