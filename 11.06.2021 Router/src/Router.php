<?php


namespace Oleg;


class Router
{
    public function run()
    {
        print_r($_GET);
        if (isset($_GET['summa'])) {
            echo (new Calc())->setA($_POST['a'])->setB($_POST['b'])->sum();
        } else {
            include "../template/index.html";
        }
    }
}