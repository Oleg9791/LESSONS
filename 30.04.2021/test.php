<?php

include "autoload.php";
include "unittest.php";

$tictac = new TicTac(3);

($tictac
    ->putCross(1, 1)
    ->getMap()
);

$map = new Map();
//echo $map
//    ->setMap($tictac->getMap())
//    ->getHtmlTable();
test(
    $tictac->init(2)->getMap(),
    [
        ["", ""],
        ["", ""]
    ]
);


test(
    $tictac->init(3)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", ""]
    ]
);


test(
    $tictac->init(1)->getMap(),
    [
        [""],
    ]
);

test(
    $tictac->init(3)->putCross(1, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", "X"],
        ["", "", ""]
    ]
);

test(
    $tictac->init(3)->putCross(2, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "X"]
    ]
);

test(
    $tictac->init(3)->putZero(2, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "0"]
    ]
);

test(
    $tictac->init(3)->putZero(1, 2)->getMap(),
    [
        ["", "", ""],
        ["", "", "0"],
        ["", "", ""]
    ]
);
$tictac->putCross(0, 1)->putZero(2, 2)->putCross(1, 1)->putZero(1, 2)->putZero(0, 2);

test(
    $tictac->init(3)->putCross(0, 1)->putZero(2, 2)->putCross(1, 1)->putZero(1, 2)->putZero(0, 2)->checkWinner(),
    true
);

test(
    $tictac->init(3)->checkWinner(),
    false
);

test(
    $tictac->setMap([
        ["", "X", "0"],
        ["", "X", "0"],
        ["", "", "0"]
    ])->checkWinner(),
    true
);
