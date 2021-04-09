<?php
// Написать наследника реализующего метод нахождения площади прямоугольного треугольника
// Добавить потомку метод рассчитывающий периметр треугольника
class Triangle
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }

    public function hypo()

    {
        return sqrt($this->a ** 2 + $this->b ** 2);

    }
}

class TrianBin extends Triangle
{
    public function square()
    {
        return ($this->a * $this->b) / 2;
    }

    public function perim()
    {
        return $this->a + $this->b + $this->hypo();

    }
}

$hup = new TrianBin(8, 10);
echo $hup->square() . "<br>";
echo $hup->perim() . "<br>";
echo $hup->hypo();