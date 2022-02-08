<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <?
    $t = date('H');
    if ($t >= 20)
    {
    ?>
    <link rel="stylesheet" type="text/css" href="styles/styles_hight.css">
    <?
    }
    ?>
    <?
    if ($t < 8)
    {
    ?>
    <link rel="stylesheet" type="text/css" href="styles/styles_hight.css">
    <?
    }
    ?>
</head>
<body class="body">
    <header class="header">
        <section class="flex_menu">
            <img class="logo" src="images/Bi_300_200.png" alt="Нет рисунка">
            <button class="tab" type="button" name="Tab"><a href="table.html">Таблица Менделеева</a></button>
        </section>
    </header>
    <main class="main">
        <div class="menu">
        </div>
        <img class="photo" src="images/Photo.jpeg" alt="Нет рисунка">
        <div class="fio">
           <h1 class="b">Илья Бондалетов</h1>
        </div>
        <div class="info">Рассказ о себе. Начал заниматся ИТ в 2007 году 2 года проработав системным адимнистратором, сменил напвавление на автоматизацию торговли и общепита в рознице, последние несколько лет занимаюсь внедрением, обслуживанием и доработкой программных продуктов на базе 1с. В остальное время, так я как папа двоих детишек конечно же, максимально стараюсь проводить время с семьей. По возможности люблю поиграть футбол, вообщем провести время активно.</div>
        <div class="feedback">Обратная связь по курсу в школе Факт. Так как курс подается в достаточно сжатой базовой форме, в видут большого количества информации по пройденным темам в открытых источниках сети интернет, хотелось бы видеть ,больше ссылок на материалы для правельного самостоятельного изучения по мнению преподавателя. По большей части выше изложенная часть добавлена для наполнения блока. </div>

        <section class="flex">
            <div class="f">
                <img class="img" src="images/w210.jpg" alt="w210">
                <div>Mercedes-Benz E-class (W210) Читайте отзывы владельцев Mercedes-Benz E-class (W210) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>

            <div class="f">
                <img class="img" src="images/w211.jpg" alt="w211">
                <div>Mercedes-Benz E-class (W211) Читайте отзывы владельцев Mercedes-Benz E-class (W211) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>
            <div class="f">
                <img class="img" src="images/w212.jpg" alt="w212">
                <div>Mercedes-Benz E-class (W212) Читайте отзывы владельцев Mercedes-Benz E-class (W212) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>
            <div class="f">
                <img class="img" src="images/w213.jpg" alt="w213">
                <div>Mercedes-Benz E-class (W213) Читайте отзывы владельцев Mercedes-Benz E-class (W213) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>
        </section>
        <section class="grid">
            <div class="g">
                <img class="img" src="images/w210.jpg" alt="w210">
                <div>Mercedes-Benz E-class (W210) Читайте отзывы владельцев Mercedes-Benz E-class (W210) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>

            <div class="g">
                <img class="img" src="images/w211.jpg" alt="w211">
                <div>Mercedes-Benz E-class (W211) Читайте отзывы владельцев Mercedes-Benz E-class (W211) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>
            <div class="g">
                <img class="img" src="images/w212.jpg" alt="w212">
                <div>Mercedes-Benz E-class (W212) Читайте отзывы владельцев Mercedes-Benz E-class (W212) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>
            <div class="g">
                <img class="img" src="images/w213.jpg" alt="w213">
                <div>Mercedes-Benz E-class (W213) Читайте отзывы владельцев Mercedes-Benz E-class (W213) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.</div>
            </div>
        </section>
    </main>
</body>
</html>