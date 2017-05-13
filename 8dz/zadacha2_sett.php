<?php
$name=$fersname=$position=null;
if (!empty($_POST['name']) && !empty($_POST['femily' ])&& !empty($_POST['dolzh' ]) ) {
    $mas = [
        'Имя'=> $_POST['name'],
        'Фамилия'=> $_POST['femily'],
        'Должность'=> $_POST['dolzh'],
    ];
    $f = fopen("lichnost.csv", "a+");
    fputcsv($f,$mas);
    fclose($f);
    
    header('Location: http://sourseit/8zadanie/zadacha2_index.php', false);
} else {
    if (empty($_POST['name'])) {
        echo ' введите ИМЯ<br>';
    }
    if (empty($_POST['femily'])) {
        echo ' Введите ФАМИЛИЮ <br>';
    }
    if (empty($_POST['dolzh'])) {
        echo ' Введите ДОЛЖНОСТЬ <br>';
    }
}




