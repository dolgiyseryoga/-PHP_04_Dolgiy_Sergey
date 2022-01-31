<!DOCTYPE html>
<html lang="en,ru">

<head>
    <meta charset="UTF-8">

    <title></title>
</head>

<body>
    <?php
    // 
    echo '<strong style=color:green> 1 Zadacha </strong><br \>';
    $str = ucwords('london is the capital of great britain');
    echo $str;
    echo '<hr \>';
    // 
    echo '<strong style=color:green> 2 Zadacha </strong><br \>';
    $str = strip_tags('html <b>css</b> php');
    print_r(explode(' ', $str));
    echo '<hr \>';
    // 
    echo '<strong style=color:green> 3 Zadacha </strong><br \>';
    $str = "Перемешайте символы этой строки в случайном порядке";
    $len = mb_strlen($str, 'UTF-8');
    $arr = [];
    for ($i = 0; $i < $len; $i++) {
        $arr[] = mb_substr($str, $i, 1, 'UTF-8');
    }
    shuffle($arr);
    $str =  implode("", $arr);
    echo $str;
    echo '<hr \>';
    // 
    echo '<strong style=color:green> 4 Zadacha </strong><br \>';
    $Data = getdate();
    $month = $Data['mon'];
    $year = $Data['year'];
    $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    echo 'Колличесвто дней в текущем месяце: ' . $days . ' дн.';
    echo '<hr \>';
    // 
    echo '<strong style=color:green> 5 Zadacha </strong><br \>';
    echo date("Y-m-d") . ',' . date("d.m.Y") . ',' . date("d.m.y") . ',' . date("G:i:s");
    echo '<hr \>';
    //
    echo '<strong style=color:green> 7 Zadacha </strong><br \>';
    $str = '1a2b3c4b5d6e7f8g9h0';
    $txt=preg_replace('/\d/','',$str); 
    echo 'Цифры из строки '. $str . '<br \>'.' удалены : ' . $txt;
    echo '<hr \>';
    //
    echo '<strong style=color:green> 8 Zadacha </strong><br \>';
    echo 'Минимальное число : ' . min(4, -2, 5, 19, -130, 0, 10). '<br/>';
    echo 'Максимальное число : ' . max(4, -2, 5, 19, -130, 0, 10);
    echo '<hr \>';
    // 
    echo '<strong style=color:green> 9 Zadacha </strong><br \>';
    echo 'Случайное число от 1 до 100: '. '<br/>' .  rand(1, 100); 
    echo '<hr \>';
    //
    echo '<strong style=color:green> 10 Zadacha </strong><br \>';
    $arr = [ 
    0 => 'Воскресение'. '<br \>', 
    1 => 'Понедельник'. '<br \>', 
    2 => 'Вторник'. '<br \>', 
    3 => 'Среда'. '<br \>', 
    4 => 'Четверг'. '<br \>', 
    5 => 'Пятница'. '<br \>', 
    6 => 'Суббота'. '<br \>'];
    print_r($arr);
    echo '<br \>';
    echo 'Текущий день недели: '. '<br/>' .$arr[1];
    ?>
</body>

</html>