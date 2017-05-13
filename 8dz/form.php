<?php
session_start();
$_SESSION ['name'] = $_POST['name'];

if ($_POST['name']){
    $name = $_POST['name'];
    echo $name;
}else
    echo 'Введите имя!';
?>
<form  method="post">
    <input type="text" name="name" placeholder="Введите имя" autofocus><br><br>
    <input type="submit" name="sub" value="Отправить">
</form>
