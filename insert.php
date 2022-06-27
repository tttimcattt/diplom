<?php
    session_start();
    require_once 'connect.php';
    $date = $_POST['date'];
    $place = $_POST['place'];
    $check_date = $_POST['check_date'];
    $check_place = $_POST['check_place'];
    $family = $_POST['family'];
    $name = $_POST['name'];
    $num = $_POST['num'];
    $id_request_user = $_SESSION['user']['id'];
    $connect->query("INSERT INTO `request` (`family`, `name`, `date`, `place`, `num`, `id_user`) VALUES ('$family', '$name', '$check_date', '$check_place', '$num', '$id_request_user')");
    $connect->query("UPDATE `place` SET busy=1 WHERE `id_date` = '$date' and `id` = '$place'");
    $connect->query("UPDATE `place` SET `id_user` = '$id_request_user' WHERE `id_date` = '$date' and `id` = '$place'");
    $connect->close();
    header('Location: /profile.php');