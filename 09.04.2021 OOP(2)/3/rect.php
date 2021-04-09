<?php
// Написать класс прямоугольник
//реализовать метод нахождения его площади и периметр

class Rect
{

    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }

    public function setB($b)
    {
        if ($b > 0) {
            $this->b = $b;
        }

    }

    public function square(): float
    {
        return $this->a * $this->b;
    }

}

class Perimetr extends Rect

{
    public function per(): float
    {
        return ($this->a + $this->b) * 2;
    }
}

//$number = new Rect(5, 4);
$per = new Perimetr(5, 4);
echo $per->square() . "<br>";
echo $per->per() . "<br>";
$per->setA(2);
$per->setB(2);
echo $per->square() . "<br>";
echo $per->per();
