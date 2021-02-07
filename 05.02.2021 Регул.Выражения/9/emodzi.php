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
        "🤠",
        "🥳",
        "👀",
        "😈"
    ],
    $str);