<?php
preg_match("/(\d+)(\+|\-|\*|\/|\*\*)(\d+)/iu", $_POST["calc"], $matches);
$a = $matches[1];
$b = $matches[3];
$operation = $matches[2];
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
echo match ($operation) {
    "+" => $a + $b,
    "-" => $a - $b,
    "*" => $a * $b,
    "/" => $a / $b,
    "**" => $a ** $b,
    default => "Unknown operation"
};