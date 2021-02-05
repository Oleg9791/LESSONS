<?php
$str=$_POST["name"];
echo preg_replace(
    [
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:p/iu",
        "/:-\*/iu"
    ],
    [
        "<img src='Emotes-face-smile-icon.png'>",
        "<img src='Smiley-27-icon.png'>",
        "<img src='girl-bunny-happy-icon.png'>",
        "<img src='happy-icon.png'>"
    ],
    $str);