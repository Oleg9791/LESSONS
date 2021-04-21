<?php
spl_autoload_register(function ($class) {
//    echo $class;
    include "Classes/$class.php";
});

$calc = new  Calc(2, 3);

echo $calc->sum();
echo "<br>";
$calc2 = new  Division(7, 3);
echo $calc2->div();

echo "<br>";

$tb = new Table();
echo $tb
    ->setStyle(" border: 1px solid red;")
    ->setData([
        ['Петя', 'Вася', 'Ира'],
        ['Вася', 'Ира', 'Петя'],
        ['Ира', 'Лена', 'Вика'],
        ['Лена', 'Вася', 'Ира'],
        ['Вика', 'Ира', 'Лена'],
        ['Оля', 'Лена', 'Вика']
    ])
    ->html();

