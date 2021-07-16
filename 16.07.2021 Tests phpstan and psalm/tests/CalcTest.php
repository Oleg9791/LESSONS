<?php

namespace UnitTestRow;

use PHPUnit\Framework\TestCase;
use App\Calc;

class CalcTestTest extends TestCase
{
    private Calc $calc;

    public function setUp(): void
    {
        $this->calc = new Calc();
    }

    public function testCalc():void
    {
        $this->assertEquals(4,
            $this
                ->calc
                ->setA(2)
                ->setB(2)
                ->sum()
        );
    }
}
