<?php

// print_r($_POST);
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];

if ($q1 == 4 and $q2 == "Лондон") {
    echo "Зачет";
} else {
    echo "Не сдал";
}
