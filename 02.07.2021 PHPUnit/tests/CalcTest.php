<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalcTest extends TestCase
{
    public function testTest()
    {
        $this->assertEquals(1, 1);
    }

    public function testCalculator()
    {
        $calc = new Calculator();
        $calc->setA(3)->setB(7);
        $this->assertEquals(10, $calc->sum());
        $this->assertEquals(4, $calc->setA(8)->setB(2)->div());
        $this->assertEquals(2, $calc->setA(8)->setB(6)->diff());
        $this->assertEquals(54, $calc->setA(9)->setB(6)->mult());
    }

    public function testTypes()
    {
        $calc = new Calculator();
        $this->assertIsFloat($calc->setA(8)->setB(2)->div());
    }
}