<?php

namespace App;

class Single
{
    private static ?object $item = null;
    public string $name = "";

    private function __construct()
    {

    }

    public static function getItem()
    {
//        return new static();
        if (Single::$item === null) {
            Single::$item = new static();
            return Single::$item;
        } else {
            return Single::$item;
        }
    }
}