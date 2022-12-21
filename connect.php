<?php

$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'expdo');





/*
session_start();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pwd'])) {
    // Переменные с формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "expdo";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (name, email, pwd) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $pwd);
    if ($conn->query($stmt) === TRUE) {
        echo "Данные записаны";
    } else {
        echo "Ошибка: " . $stmt . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("set names utf8");

    $data = array('name' => $name, 'email' => $email, 'pwd' => $pwd);
    $query = $conn->prepare("INSERT INTO users (name, email, pwd) values (:name, :email, :pwd)");
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':pwd', $pwd);
    $query->execute($data);
    } catch (PDOException $e) {
        // Если есть ошибка соединения, выводим её
        echo 'Ошибка!: ' . $e->getMessage() . "<br/>";
    }

    $conn = null;
}
*/
?>