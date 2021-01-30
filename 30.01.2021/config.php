<?php
if (!empty($_POST) && ($_POST["name"] != "") && ($_POST["text"] != "")) {

    $row = "\n<--->\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"] . "\n";

    file_put_contents("var1.txt", $row, FILE_APPEND);

    header("location: ?");
    die();
}
