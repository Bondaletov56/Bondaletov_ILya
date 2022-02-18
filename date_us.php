<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles/date_us_style.css">
</head>
<body>
<?
require "header.php";
?>
    <form action="date_us.php">
        <fieldset>
            <legend>Задание №1 Слайд 13 (Урок 11-12)</legend>
                <p>
                    <input type="text" name="login" placeholder="Логин"><br>
                </p>
                <p>
                    <input type="email" name="email" placeholder="Введите почту"><br>
                </p>
            <p>Комментарий<Br>
                <textarea name="comment"></textarea></p>
            <p><input type="submit" value="Отправить">
        </fieldset>
    </form>
<?
    $login = $_GET['login'];
    $mail = $_GET['email'];
    $coment = $_GET['comment'];
    mail($mail, $login, $coment);

?>
<!---------------------------------------------------------------------------->
    <form action="date_us.php">
        <fieldset>
            <legend>Задание №3 Слайд 13 (Урок 11-12)</legend>
                <p>
                    <input type="text" name="name" placeholder="Введите имя"><br>
                </p>
                <section class="vopros">
                    <label>1 .</label>
                    <input type="radio" name="1" checked value="1">да
                    <input type="radio" name="1"value="2">нет
                </section>
            <section class="vopros">
                <label>2 .</label>
                <input type="radio" name="2" checked value="1">да
                <input type="radio" name="2" value="2">нет
            </section>
            <section class="vopros">
                <label>3 .</label>
                <input type="radio" name="3" checked value="1">да
                <input type="radio" name="3" value="2">нет
            </section>
            <section class="vopros">
                <label>4 .</label>
                <input type="radio" name="4" checked value="1">да
                <input type="radio" name="4" value="2">нет
            </section>
            <section class="vopros">
                <label>5 .</label>
                <input type="radio" name="5" checked value="1">да
                <input type="radio" name="5" value="2">нет
            </section>
            <section class="vopros">
                <label>6 .</label>
                <input type="radio" name="6" checked value="1">да
                <input type="radio" name="6" value="2">нет
            </section>
            <section class="vopros">
                <label>7 .</label>
                <input type="radio" name="7" checked value="1">да
                <input type="radio" name="7" value="2">нет
            </section>
            <section class="vopros">
                <label>8 .</label>
                <input type="radio" name="8" checked value="1">да
                <input type="radio" name="8" value="2">нет
            </section>
            <section class="vopros">
                <label>9 .</label>
                <input type="radio" name="9" checked value="1">да
                <input type="radio" name="9" value="2">нет
            </section>
            <section class="vopros">
                <label>10.</label>
                <input type="radio" name="10" checked value="1">да
                <input type="radio" name="10" value="2">нет
            </section>
            <section class="vopros">
                <label>11.</label>
                <input type="radio" name="11" checked value="1">да
                <input type="radio" name="11" value="2">нет
            </section>
            <section class="vopros">
                <label>12.</label>
                <input type="radio" name="12" checked value="1">да
                <input type="radio" name="12" value="2">нет
            </section>
            <section class="vopros">
                <label>13.</label>
                <input type="radio" name="13" checked value="1">да
                <input type="radio" name="13" value="2">нет
            </section>
            <section class="vopros">
                <label>14.</label>
                <input type="radio" name="14" checked value="1">да
                <input type="radio" name="14" value="2">нет
            </section>
            <section class="vopros">
                <label>15.</label>
                <input type="radio" name="15" checked value="1">да
                <input type="radio" name="15" value="2">нет
            </section>
            <section class="vopros">
                <label>16.</label>
                <input type="radio" name="16" checked value="1">да
                <input type="radio" name="16" value="2">нет
            </section>
            <section class="vopros">
                <label>17.</label>
                <input type="radio" name="17" checked value="1">да
                <input type="radio" name="17" value="2">нет
            </section>
            <section class="vopros">
                <label>18.</label>
                <input type="radio" name="18" checked value="1">да
                <input type="radio" name="18" value="2">нет
            </section>
            <p>
                <button type="submit">Результат</button>
            </p>
        </fieldset>
        <?
        $yes = [1 => 1 , 2 => 1, 4 => 1, 5 => 1, 6 => 1, 7 => 1, 8 => 1, 11 => 1, 12 => 1, 15 => 1, 16 => 1];
        $no = [3 => 2, 9 => 2, 10 => 2, 13 => 2, 14 => 2, 19 => 2];
        $g = $_GET;
        $yes1 = array_intersect($yes, $g);
        $no1 = array_intersect($no, $g);
        $rez = (count($yes1) + count($no1));
        echo $g['name'];
        if ($rez>15):
            echo "У Вас покладистый характер";
        elseif ($rez>=8 && $rez<=15):
            echo "Вы не лишены недостатков, но с вами можно ладить";
        else:
            echo "Вашим друзьям можно посочувствовать";
        endif;
        ?>
</form>
<?
require "footer.php";
?>
</body>
</html>