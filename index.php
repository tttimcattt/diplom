<?php
    session_start();
    if ($_SESSION['user'])
    {
        header('Location: /profile.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a href="/page_auth.php" class="mr-5 hover:text-gray-900">Вход</a>
                <a href="/page_reg.php" class="mr-5 hover:text-gray-900">Регистрация</a>
                <a href="/menu.php" class="mr-5 hover:text-red-500">Наше меню</a>
            </nav>
            <a href="/index.php" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <img src="img/logo.png" width="40">
                <span class="ml-3 text-xl">Кафе</span>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            </div>
        </div>
    </header>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Кафе</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Добро пожаловать на сайт. Здесь вы можете забронировать место в нашем кафе.</p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="img/image1.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="img/image2.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="img/image6.jpg">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="img/image3.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="img/image5.jpg">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="img/image4.jpg">
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div>
            <div class="container px-5 py-10 mx-auto flex flex-wrap justify-between">
                Наши контакты: <br>Телефон: +7 (923) 235-36-22 <br> Адрес: г. Усть-Катав, МКР-2 д. 39
                <a href="#"><img  src="img/map.jpg" alt=""></a>
            </div>
        </div>
        <!--  -->

    </section>
    <footer class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a href="/page_auth.php" class="mr-5 hover:text-gray-900">Вход</a>
                <a href="/page_reg.php" class="mr-5 hover:text-gray-900">Регистрация</a>
            </nav>
            <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <img src="img/logo.png" width="40">
                <span class="ml-3 text-xl">Кафе</span>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            </div>
        </div>
    </footer>
</body>
</html>