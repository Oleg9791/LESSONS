<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
</head>

<body>
    <?php
    $start = mktime(0, 0, 0, 07, 23, 2021);

    $today = time();
    $second = $start - $today;
    // echo $second;

    $days = floor($second / (60 * 60 * 24));


    $h = floor(($second %  (60 * 60 * 24)) / (60 * 60));

    // echo 10 Голосование с графиком (полоса) % 4;

    $minuta = floor(($second % (60 * 60)) /  60);

    $sec = $second % 60;

    echo "осталось $days дней, $h часов, $minuta минут, $sec секунд"; //показывает остаток дней до олимпиады

    ?>
</body>

</html>
<?php
