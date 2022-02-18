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
<?
//Логин "Василий" Пароль "qwertyuiop[]"
$login = "Василий";
$password = 'f2ea62129a093f8a570049f0ebbc7e80';
if ($login == $_POST['login'] && $password == md5($_POST['password'])) {
    //require('hello_auth.php');
    include 'hello_auth.php';
}
 else
        echo "неверный пароль";
require "footer.php";
?>
</body>
</html>
