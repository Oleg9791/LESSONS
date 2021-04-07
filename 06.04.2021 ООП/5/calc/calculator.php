<?php

/**
 * Class Calc класс калькулятор
 */
class Calc
{
    /**
     * @var float переменная a для вычислений калькулятора
     */
    public float $a;
    /**
     * @var float переменная b для вычислений калькулятора
     */
    public float $b;


    /**
     * Calc constructor. конструктор инициализирует переменные а и b
     * @param $a
     * @param $b
     */

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return float функция для сложения чисел
     */
    public function sum(): float
    {

        return $this->a + $this->b;
    }

    /**
     * @return float функция для вычитания чисел
     */

    public function ran(): float
    {

        return $this->a - $this->b;
    }

    /**
     * @return float функция для умножения чисел
     */

    public function uno(): float
    {

        return $this->a * $this->b;
    }

    /**
     * @return float функция для деления чисел
     */

    public function del(): float
    {

        return $this->a / $this->b;
    }
    /**
     * @return float функция для деления чисел
     */

    public function pow(): float
    {

        return $this->a ** $this->b;
    }


}


$calc = new Calc(10, 2);

//echo $calc->sum() . "<br>";
//echo $calc->ran() . "<br>";
//echo $calc->uno() . "<br>";
//echo $calc->del();
