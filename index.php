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
    <title>Форма регистрации</title>
</head>
<body>
<?php
require('connect.php');
/** @var object $connection */
if (isset($_POST['email']) && isset($_POST['pwd'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "INSERT INTO users (name, email, pwd) VALUES ('$name', '$email', '$pwd')";
    $result = mysqli_query($connection,$query);

    if ($result){
        $smsg = "Регистрация прошла успешно";
    }else{
        $fmsg = "Ошибка";
    }

}



/*
$nameErr = $emailErr = $pwdErr = "";
$name = $email = $pwd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["$name"])){
        $nameErr = "Введите Имя пользователя!";
    }else{
        $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        $nameErr = "Допускаются только буквы и пробелы";
    }
}

    if(empty($_POST["email"])){
        $emailErr = "Укажите вашу почту!";
    }else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Неправильный фрмат почты";
    }
}

    if (empty($_POST["pwd"])){
        $pwdErr = "Придумайте пароль";
    }else{
        $pwd = test_input($_POST["pwd"]);
        $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
        if (!password_verify($pwd, $hash)){
            $pwdErr = "Неправильный формат пароля";
        }else{
            $pwd = password_hash($pwd, PASSWORD_BCRYPT);
            return $pwd;
        }
    }
}
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


if (!empty($data)) {
   $message = 'Регистрация прошла успешно!';
} else {
    $message = 'Ошибка при регистрации, заполните все поля в нужном формате!';
}
*/


?>


    <div class="container">
        <form  class="form-sign-in" method="POST">
            <h2>Регистрация</h2>
            <?php if (isset($smsg)) { ?><div class="alert alert-success" role="alert"><?php echo $smsg;?> </div> <?php } ?>
            <?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"><?php echo $fmsg;?> </div> <?php } ?>
            <label for="name">Имя пользователя:</label>
                <input type="text" id="name" name="name" class="form-control"  required >
            <br>
            <label for="email">Введите вашу почту:</label>
                <input type="email" id="email" name="email" class="form-control"  required >
            <br>
            <label for="pwd">Введите пароль:</label>
                <input type="password" id="pwd" name="pwd" class="form-control" required >
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Регистрация</button>
            <a href="login.php" class="btn btn-lg btn-primary btn-block">Вход</a>
        </form>
    </div>
</body>
</html>

