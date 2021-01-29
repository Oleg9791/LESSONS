<?php
// print_r($_POST);

$date = explode("-", $_POST["qwe"]);
$year = $date[0];
$month = $date[1];
$day = $date[2];
$second = time() - mktime(0, 0, 0, $month, $day, $year);

$days = floor($second / (60 * 60 * 24));

echo $days . "  Полных дней(суток)";
