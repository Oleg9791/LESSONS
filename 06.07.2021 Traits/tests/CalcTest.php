<?php

use PHPUnit\TextUI\XmlConfiguration\PHPUnit;
use App\Calculator;

class CalcTest extends \PHPUnit\Framework\TestCase
{
    public function testSum()
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->setA(2)->setB(2)->sum());
    }
}