<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_login) > 0)
    {
        echo 'Такой пользователь уже существует. <br>';
        echo 'Попробуйте придумать другой логин. Попробовать? <a href="/page_reg.php" style="text-decoration: none">Да.</a>';
        die();
    }
    $pass = md5($pass);
    mysqli_query($connect, "INSERT INTO `users` (`login`, `pass`) VALUES ('$login', '$pass')");
    echo 'Успешная регистрация. <br>';
    echo '<a href="/page_auth.php" style="text-decoration: none">Войти</a>';