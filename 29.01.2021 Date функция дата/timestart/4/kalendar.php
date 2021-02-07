<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="?">
        Выберите дату: <input type="date" name="date">
        <input type="submit" name="submit" value="Узнать">
    </form>
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
    $date = explode("-", $_POST["date"]);
    print_r($date);
    $date = date("l", mktime(0, 0, 0, $date[1], $date[2], $date[0]));
    echo $dayWeek[$date];
    ?>
</body>

</html>