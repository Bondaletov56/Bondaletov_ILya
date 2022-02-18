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
    if ($t >= 20 or $t < 8)
    {
        ?>
        <link rel="stylesheet" type="text/css" href="styles/styles_hight.css">
        <?
    }
    ?>
</head>
<body>
    <header class="header">
        <section class="flex_menu">
            <a href="index.php"><img class="logo" src="images/Bi_300_200.png" alt="Нет рисунка"></a>
            <button class="tab" type="button" name="Tab"><a href="authorization.php">Авторизация</a></button>
            <button class="tab" type="button" name="Tab"><a href="table.html">Таблица Менделеева</a></button>
            <button class="tab" type="button" name="Tab"><a href="cikl.php">DZ_9-02-2022</a></button>
            <button class="tab" type="button" name="Tab"><a href="date_us.php">DZ_16-02-2022</a></button>
        </section>
    </header>
</body>
</html>
