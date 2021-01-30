<?php
if (!empty($_POST) && ($_POST["name"]) != "" && ($_POST["email"]) != "" && ($_POST["text"] != "")) {
    $row = "\n<----->\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"] . "\n" .
        $timeDate = date("d-m-Y H-i-s");
            // date_default_timezone_set("Europa/Minsk");

    file_put_contents("var.txt", $row, FILE_APPEND);
    header("Location: ?");
    die(); //exit()
}
