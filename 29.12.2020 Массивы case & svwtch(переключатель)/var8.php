<?php
$a = $_POST["n"];


switch ($a) {
    case "ноль":
        $str = "serro";
        break;

    case "один":
        $str = "one";
        break;

    case "два":
        $str = "two";
        break;

    case "три":
        $str = "three";
        break;

    case "четыре":
        $str = "four";
        break;

    case "пять":
        $str = "five";
        break;

    default:
        $str = "нет такого слова";
        break;
}
echo $str;// google-переводчик
