<?php
//print_r($_POST);
include "smile.php";
$data = json_decode(file_get_contents("data.json"));
$data[] = ['msg' => $_POST["msg"], 'name' => $_POST["name"], 'time' => date("d-M-Y (l) H-i-s")
];
//print_r($data);
if (!cenzura($_POST["msg"])) {
    file_put_contents("data.json", json_encode($data));
    header('Location: main.php');
} else {
    echo "Сообщение не отправлено, ваш текст содержит нецензурное выражение <br\n>";
    echo "<a href='main.php'>Переход на главную страницу</a>";

}

