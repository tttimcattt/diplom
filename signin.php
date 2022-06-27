<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $pass = md5($pass);
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0)
    {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login']
        ];
        if ($_SESSION['user']['login'] == 'admin')
        {
            header('Location: /admin.php');
        }
        else
        {
            header('Location: /profile.php');
        }
    }
    else
    {   
        echo 'Пользователь не найден или введён неправильный пароль. <br>';
        echo 'Попробовать ещё раз? <a href="/page_auth.php" style="text-decoration: none">Да.</a>';
    }