<?php
    session_start();
?>
<?php if ($_SESSION['user']['login'] == 'admin'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель управления</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-5" style="color: red">Администратор</a>
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
    <table style='margin: auto; margin-top: 50px; border: 1'>
        <h1 style='text-align: center; margin-top: 20px'>Записи клиентов:</h1>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Имя</th>
                <th scope="col">Дата</th>
                <th scope="col">Место</th>
                <th scope="col">Кол-во чел</th>
                <th scope="col">/del</th>
            </tr>
        </thead>
        <?php
            require_once 'connect.php';
            $user = $_SESSION['user']['id'];
            if (isset($_GET['del']) and isset($_GET['del_id']))
            {
                $id = $_GET['del'];
                $del_id = $_GET['del_id'];
                $connect->query("DELETE FROM `request` WHERE `id` = '$id'");
                $connect->query("UPDATE `place` SET busy=0 WHERE `id_user` = '$del_id'");
                $connect->query("UPDATE `place` SET id_user=0 WHERE `id_user` = '$del_id'");
            }
            $itogs = $connect->query("SELECT * FROM `request`");
            $itogs = mysqli_fetch_all($itogs);
            foreach ($itogs as $itog) {
        ?>
        <tr>
            <td><?= $itog[0] ?></td>
            <td><?= $itog[1] ?></td>
            <td><?= $itog[2] ?></td>
            <td><?= $itog[3] ?></td>
            <td><?= $itog[4] ?></td>
            <td><?= $itog[5] ?></td>
            <td><a href="?del=<?= $itog['0'] ?>&del_id=<?= $itog['6'] ?>" style='text-decoration: none; color: red'>удалить</a></td>
        </tr>
    <?php
    }
    ?>
  </table>
</body>
</html>
<?php else: header('Location: /'); ?>
<?php endif; ?>