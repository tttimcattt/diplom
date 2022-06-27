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
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Меню</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Здесь вы можете ознакомиться с меню нашего кафе.</p>
            </div>
            <div class="text-lg">
              <div class="">
                — Салат «Цезарь» с курицей 125/65 г. 590 руб.<br>
              </div>

              <div>
                — Салат «Цезарь» с креветками 125/65 г. 930 руб.<br>
              </div>

              <div>
                — Салат с куриной печенью
                Микс салат с обжаренными кусочками куриной печени, с помидорами черри и дольками персика, заправляется соево-медовым соусом, 200 г.
                620 руб. <br>
              </div>

              <div>
              — Баклажаны в кисло-сладком соусе
              Теплая закуска из кусочков баклажан в кисло-сладком соусе, 150 г.
              470 руб.<br>
              </div>

              <div>
              — Тарелка свежих овощей с зеленью
              Помидоры, свежий огурец, редис, болгарский перец, лук зеленый, укроп, кинза, базилик, 250 г.
              550 руб.<br>
              </div>

              <div>
              — Ассорти европейских сыров
              Сыр Бри, сыр Камамбер, сыр Дор Блю, сыр Пармезан. Подается с виноградом, клубникой, медом и грецким орехом, 200 г.
              1450 руб.<br>
              </div>

              <div>
              — Салат с креветками, микс салатом,  свежим огурцом, редисом и помидорами черри              160 г.
              680 руб.
              </div>
            </div>
        </div>
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