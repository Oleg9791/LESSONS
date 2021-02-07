<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <p>Зарплатная ведомость</p>
    <?php
    $vedomost = [
        ["Номер", "ФИО", "Зарплата"],
        [1, "Иванов", 500,],
        [2, "Сидоров", 600],
        [3, "Петров", 700],
        [4, "Грачев", 300],


    ];
    for ($i = 0; $q = count($vedomost), $i < $q; $i++) {
        for ($j = 0; $w = count($vedomost[$i]), $j < $w; $j++) {
        }
    }

    // print_r($vedomost);
    include "arrayy.php";
    echo zarplata($q, $w, $vedomost);
    ?>
</body>

</html>
<?php
