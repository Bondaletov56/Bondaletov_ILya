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
<?
require "header.php";
?>
<main>
    <form>
        <fieldset>
            <legend>Задание 1</legend>
            <?
            for ($i1=5; $i1<=13; $i1++){
                echo $i1 . "<br>";
            }
            ?>
        </fieldset>
    </form>
    <form>
        <fieldset>
            <legend>Задание 2 (while)</legend>
            <?
            $num = 1000;
            $it = 0;
            while ($num>50){
                $num = ($num/2);
                $it = ++$it;
            }
            echo "Количество итераций" . " " . $it;
            ?>
        </fieldset>
    </form>
    <form>
        <fieldset>
            <legend>Задание 2 (for)</legend>
            <?
            $num = 1000;
            $it = 0;
            for($num; $num>50;){
                $num = ($num/2);
                $num = --$num;
                $it = ++$it;
            }
            echo "Количество итераций" . " " . $it;
            ?>
        </fieldset>
    </form>
    <form>
        <fieldset>
            <legend>Задание 3</legend>
            <?
            for ($i = 0; $i <= 10; $i++) {
                for ($i3 = 0; $i3 <= (10 - $i); $i3++) {
                    echo $i3;
                }
                ?>
                <br>
            <?
            }
            ?>
        </fieldset>
    </form>
</main>
<?
require "footer.php";
?>
</body>
</html>
