<?php

use PHPUnit\Framework\TestCase;
use App\NewCalc2;

class NewCalc2Test extends TestCase
{
    public function testNewCalc2()
    {
        $newCalc = new NewCalc2();
        $this->assertEquals(3, $newCalc->setA(1)->setB(2)->sum());
        $this->assertEquals(-1, $newCalc->setA(1)->setB(2)->diff());

    }
}