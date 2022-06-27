<?php
    session_start();
    if (!$_SESSION['user'])
    {
        header('Location: /');
    }
    if ($_SESSION['user']['login'] == 'admin')
    {
        header('Location: /admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-5" style="color: red"><?= $_SESSION['user']['login'] ?></a>
                <a href="/exit.php" class="mr-5 hover:text-gray-900">выйти</a>
            </nav>
            <a href="/index.php" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <img src="img/logo.png" width="40">
                <span class="ml-3 text-xl">Кафе</span>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            </div>
        </div>
    </header>
    <div class="requestBody">
        <form id="form" class="requestForm" action="/insert.php" method="POST">
            <button id="submit" style="border: solid" type="button" onClick="openModal()">Забронировать место в кафе</button>
            <p style="border: 1px; margin-top: 10px" name="date" id="date"></p>
            <p style="border: 1px; margin-top: 10px" name="place" id="place"></p>
            <div id="result"></div>
            <input name="family" id="input" style="display: none; margin-top: 10px; text-align: center; outline: none" type="text" placeholder="Фамилия" required>
            <input name="name" id="input2" style="display: none; margin-top: 10px; text-align: center; outline: none" type="text" placeholder="Имя" required>
            <input name="num" id="input3" style="display: none; margin-top: 10px; text-align: center; outline: none" type="text" placeholder="Кол-во чел." required>
            <input name="check_date" style="display: none" type="text">
            <input name="check_place" style="display: none" type="text">
            <button id="submit2" style="display: none; margin-top: 10px;" type="button">Подтвердить данные</button>
            <button id="submit3" style="display: none; margin-top: 10px" type="submit">Забронировать</button>
        </form>
    </div>
    <script>
        $('#submit').click(function() 
        {
            $("#submit").css("display", "none");
            $("#submit2").css("display", "block");
        });
        $('#submit2').click(function()
        {
            $("#submit2").css("display", "block");
            $("#input").css("display", "block");
            $("#input2").css("display", "block");
            $("#input3").css("display", "block");
            $("#submit2").css("display", "none");
            $("#submit3").css("display", "block");
            $("#date").css("display", "none");
            $("#place").css("display", "none");
            let value_date = $('#date1 option:selected').text();
            let value_place = $('#place1 option:selected').text();
            document.forms.form.check_date.value = value_date;
            document.forms.form.check_place.value = value_place;
        });
    </script>
    <br>
    <?php
        require_once 'connect.php';
        $user = $_SESSION['user']['id'];
        if (isset($_GET['del']))
        {
            $id = $_GET['del'];
            $connect->query("DELETE FROM `request` WHERE `id` = '$id'");
            $connect->query("UPDATE `place` SET busy=0 WHERE `id_user` = '$user'");
            $connect->query("UPDATE `place` SET id_user=0 WHERE `id_user` = '$user'");
        }
        $itogs = $connect->query("SELECT * FROM `request` WHERE `id_user` = '$user'");
        $itogs = mysqli_fetch_all($itogs);
        foreach ($itogs as $itog) {
    ?>
    <br>
    <div class='requestBody'>
        <form class='requestForm'>
            <?= $itog[1] . ' ' . $itog[2] ?></th><br>
            Дата: <?= $itog[3] ?></th><br>
            Место: <?= $itog[4] ?></th><br>
            Кол-во чел: <?= $itog[5] ?></th>
            <a style="color: red" href="?del=<?= $itog['0'] ?>" class="nav-link text-danger">отменить бронь</a>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>