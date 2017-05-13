<form name="sort">
    <select name="sorting">
        <option value="ASC" name="asc">По возростанию</option>
        <option value="DESK" name="desk">По убыванию</option>
    </select>
    <input type="text" name="text" placeholder="фильтр"><br><br>
    <input type="submit">
</form>
<?php
$file = file('lichnost.txt');
foreach ($file as $value) {
//    echo $value . '<br>';
}

echo '<br>';
if ($_REQUEST['sorting'] == 'ASC') {
    sort($file);
    foreach ($file as $value) {
        echo $value . '<br>';
    }
} elseif ($_REQUEST['sorting'] == 'DESK') {
    rsort($file);
    foreach ($file as $value) {
        echo $value . '<br>';
    }
}

echo '<br>';
foreach ($file as $value) {
    $exp = explode(",", $value);
    if ($_REQUEST['text'] == $exp[0] or $_REQUEST['text'] == $exp[1]) {
        echo $exp[0] . ' ' . $exp[1] . ' ' . $exp[2] . '<br>';
    }
}

