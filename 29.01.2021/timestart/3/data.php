<?php
$dayWeek = [
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"
];
$date = date("l");
// $today = $dayWeek[$date];
// echo $today;//выводит сегодняшний день
echo $today = $dayWeek[date("l")];
