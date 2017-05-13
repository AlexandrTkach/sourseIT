<?php
setcookie('name' , $_POST['name'] ,time()+15 , '/');
var_dump($_COOKIE);
?>
<form  method="post">
    <input type="text" name="name" placeholder="Введите имя" autofocus><br><br>
    <input type="submit" name="sub" value="Отправить">
</form>
