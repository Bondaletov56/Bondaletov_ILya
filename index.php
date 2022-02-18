<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?/*
    if ($t < 8)
    {
    */?><!--
    <link rel="stylesheet" type="text/css" href="styles/styles_hight.css">
    --><?/*
    }
    */?>
</head>
<body class="body">
<?
    require "header.php";
?>
    <main class="main">
        <div class="menu">
        </div>
        <img class="photo" src="images/Photo.jpeg" alt="Нет рисунка">
        <div class="fio">
           <h1 class="b">Илья Бондалетов</h1>
        </div>
        <div class="info" id="info">
            <?$info = "Рассказ о себе. Начал заниматся ИТ в 2007 году 2 года проработав системным адимнистратором, сменил напвавление на автоматизацию торговли и общепита в рознице, последние несколько лет занимаюсь внедрением, обслуживанием и доработкой программных продуктов на базе 1с. В остальное время, так я как папа двоих детишек конечно же, максимально стараюсь проводить время с семьей. По возможности люблю поиграть футбол, вообщем провести время активно.";
            $color = sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
            echo "<font color='$color'>" . mb_substr($info,0,7) . "</font>". mb_substr($info,7);
            ?></div>
        <div class="feedback">
            <? $feedback = "Обратная связь по курсу в школе Факт. Так как курс подается в достаточно сжатой базовой форме, в видут большого количества информации по пройденным темам в открытых источниках сети интернет, хотелось бы видеть ,больше ссылок на материалы для правельного самостоятельного изучения по мнению преподавателя. По большей части выше изложенная часть добавлена для наполнения блока.";
            echo $feedback;
            ?></div>

        <section class="flex">
            <div class="f">
                <img class="img" src="images/w210.jpg" alt="w210">
                <div><? $fw210 = "Mercedes-Benz E-class (W210) Читайте отзывы владельцев Mercedes-Benz E-class (W210) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $fw210;
                ?></div>
            </div>

            <div class="f">
                <img class="img" src="images/w211.jpg" alt="w211">
                <div><? $fw211 = "Mercedes-Benz E-class (W211) Читайте отзывы владельцев Mercedes-Benz E-class (W211) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $fw211;
                ?></div>
            </div>
            <div class="f">
                <img class="img" src="images/w212.jpg" alt="w212">
                <div><? $fw212 = "Mercedes-Benz E-class (W212) Читайте отзывы владельцев Mercedes-Benz E-class (W212) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $fw212;
                ?></div>
            </div>
            <div class="f">
                <img class="img" src="images/w213.jpg" alt="w213">
                <div><? $fw213 = "Mercedes-Benz E-class (W213) Читайте отзывы владельцев Mercedes-Benz E-class (W213) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $fw213;
                ?></div>
            </div>
        </section>
        <section class="grid">
            <div class="g">
                <img class="img" src="images/w210.jpg" alt="w210">
                <div><? $gw210 = "Mercedes-Benz E-class (W210) Читайте отзывы владельцев Mercedes-Benz E-class (W210) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $gw210;
                ?></div>
            </div>

            <div class="g">
                <img class="img" src="images/w211.jpg" alt="w211">
                <div><? $gw211 = "Mercedes-Benz E-class (W211) Читайте отзывы владельцев Mercedes-Benz E-class (W211) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $gw211;
                ?></div>
            </div>
            <div class="g">
                <img class="img" src="images/w212.jpg" alt="w212">
                <div><? $gw212 = "Mercedes-Benz E-class (W212) Читайте отзывы владельцев Mercedes-Benz E-class (W212) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $gw212;
                ?></div>
            </div>
            <div class="g">
                <img class="img" src="images/w213.jpg" alt="w213">
                <div><? $gw213 = "Mercedes-Benz E-class (W213) Читайте отзывы владельцев Mercedes-Benz E-class (W213) с фотографиями, рассказы об эксплуатации, тюнинге и ремонте.";
                echo $gw213;
                ?></div>
            </div>
            <?
            function mas($info, $feedback, $fw210, $fw211, $fw212, $fw213, $gw210, $gw211, $gw212 ,$gw213){
            $col = 0;
            $ar1_info = explode(" ",$info);
            $ar1_feedback = explode(" ",$feedback);
            $ar1_fw210 = explode(" ",$fw210);
            $ar1_fw211 = explode(" ",$fw211);
            $ar1_fw212 = explode(" ",$fw212);
            $ar1_fw213 = explode(" ",$fw213);
            $ar1_gw210 = explode(" ",$gw210);
            $ar1_gw211 = explode(" ",$gw211);
            $ar1_gw212 = explode(" ",$gw212);
            $ar1_gw213 = explode(" ",$gw213);
            $rez =  [$ar1_info , $ar1_feedback , $ar1_fw210 , $ar1_fw211 , $ar1_fw212 , $ar1_fw213 , $ar1_gw210 , $ar1_gw211 , $ar1_gw212 , $ar1_gw213];
            return $rez;
            }
            ?>
        </section>
        <form class="z2">
            <fieldset>
                <legend>Задание 2 Количество гласных букв на странице</legend>
                <?
                $rez1 = mas($info, $feedback, $fw210, $fw211, $fw212, $fw213, $gw210, $gw211, $gw212 ,$gw213);
                function col_glas($rez1)
                {
                    $glasn = [а, е, ё, и, о, у, ы, э, ю, я];
                    foreach ($rez1 as $value) {
                        foreach ($value as $v) {
                            foreach ($glasn as $val) {
                                $count = substr_count($v, $val);
                                $zg = mb_strtoupper($val, 'UTF-8');
                                $count += substr_count($v, $zg);
                                if ($count > 0) {
                                    $colglas = ($colglas + $count);
                                }

                            }
                            //Вывод для проверки
                            //echo $v ;
                            //echo $colglas . "<br>";
                        }
                    }
                    return $colglas;
                }
                    echo col_glas($rez1) . "<br>";
                ?>
            </fieldset>
        </form>
        <form class="z2">
            <fieldset>
                <legend>Задание 3 Количесто слов на странице </legend>
                <?
                $rez2 = mas($info, $feedback, $fw210, $fw211, $fw212, $fw213, $gw210, $gw211, $gw212 ,$gw213);
                function col_sl($rez)
                {
                    //print_r($rez);
                    foreach ($rez as $item) {
                        foreach ($item as $value) {
                            $col = ++$col;
                        }
                    }
                    return $col;
                }
                echo col_sl($rez2);
                ?>
            </fieldset>
        </form>
        <form class="z2">
            <fieldset>
                <legend>Задание 4 Количество дней между датами (13.08.87) </legend>
                <?
                //С интернета
                echo $dateDiff = date_diff(new DateTime(), new DateTime('1987-08-13 00:00:01'))->days . "<br>";
                //Свой вариант
                $sek = time() - mktime( 0,0,1,8,13,1987);
                $sek = ($sek/86400);
                echo "Количество дней от даты рождения" . " = " .(int)$sek;
                ?>
            </fieldset>
        </form>
    </main>
<?
require "footer.php";
?>
</body>
</html>