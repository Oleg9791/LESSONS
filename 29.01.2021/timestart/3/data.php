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
// $today = $dayWeek[$date];                 //второй вариант
// echo $today;//выводит сегодняшний день    //второй вариант
echo $today = $dayWeek[date("l")];
echo "<br>";

?>



<?php
function getDay()
{
    $days = array(
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    );
    return $days[(date('w'))];
}
echo "Сегодня: "  . getDay();
?>