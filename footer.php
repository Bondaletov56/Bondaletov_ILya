<?php
session_start();
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
    <footer class="footer">
        <form method="post">
            <section class="flex_footer">
                <a href="del_session.php"><button class="copy1" type="button" name="Tab">Удаление сессии</button></a>
                <input  class="copy1" name="url" type="submit" value="Fact">
                <input  class="copy1" name="url" type="submit" value="Bitrix">
                <div class="copy" ><font>© 2022 Bondaletov</font></div>
                <img class="img_inst" src="images/inst.png" alt="inst" width="50" height="50">
                <img class="img_vk" src="images/vk.png" alt="vk" width="45" height="45">
        </section>
        </form>
        <form class="copy2" method="post">
                <select name="l">
                    <option class="red" value="1">красный</option>
                    <option class="blue" value="2">синий</option>
                    <option class="grey" value="3">серый</option>
                </select>
                <button type="submit">Установить цвет фона</button>
        </form>
</footer>
</body>
</html>
