<?php
session_start();
obr($_POST['url']);
function obr($a)
{
    if ($a == "Fact"):
        $_SESSION ['url'] = 'Fact';
        $s = 'https://fact.digital/';
        header('location:' .$s);
    elseif ($a == "Bitrix"):
        $_SESSION ['url']  ='Bitrix';
        $s = 'https://www.1c-bitrix.ru/';
        header('location:' .$s);
    endif;
}
//print_r($_SESSION);
$color = $_POST['l'];
setcookie('color', $color, time()+3600);
$_COOKIE['color'] = $_POST['l'];
//print_r($_COOKIE);
if ($_COOKIE['color'] == 1):
        $col = "red";
elseif ($_COOKIE['color'] == 2):
        $col = "blue";
else: $col = "grey";
endif;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
require "header.php";
?>
<div class = "<?echo $col?>">
    <form action="authorization.php" method="post">
        <p>
            <input type="text" name="login" placeholder="Логин"><br>
        </p>
        <p>
            <input type="password" name="password" placeholder="Пароль"><br>
        </p>
        <p>
            <button type="submit">Авторизация</button>
        </p>
    </form>
</div>
<?
//Логин "Василий" Пароль "qwertyuiop[]"
$login = "Василий";
$password = 'f2ea62129a093f8a570049f0ebbc7e80';
if (count($_POST['login'])>0) {
    if (($login == $_POST['login']) && $password == md5($_POST['password'])) {
        //require('hello_auth.php');
        include 'hello_auth.php';
        $_SESSION['login'] = $_POST['login'];
    } else
        echo "неверный пароль";
}
if (count($_SESSION['login'])>0) {
    echo $_SESSION['login'] . " " . "Вы в последний раз посещали" . " " . $_SESSION['url'];
}
require "footer.php";
?>
</body>
</html>
