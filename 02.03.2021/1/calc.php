<?php
preg_match("/(\d+)(\+|\-|\*|\/|\*\*)(\d+)/iu", $_POST["calc"], $matches);
//switch ($operation) {
//    case "+":
//        $result = $a + $b;
//        break;
//
//    case "-":
//        $result = $a - $b;
//        break;
//
//    case "*":
//        $result = $a * $b;
//        break;
//
//    case "/":
//        $result = $a / $b;
//        break;
//    default:
//        $result = "Неизвестная операция";
//
//
//}
//echo $result;
//header("Location: main.php");

//include "calc.php";

    $a = $matches[1];
    $b = $matches[3];
    $operation = $matches[2];


    $result = match ($operation) {
        "+" => $a + $b,
        "-" => $a - $b,
        "*" => $a * $b,
        "/" => $a / $b,
        "**" => $a ** $b,
        default => "Unknown operation"
    };
    file_put_contents("log.txt", $result, FILE_APPEND);

    echo $result;

//header("Location: main.php");

