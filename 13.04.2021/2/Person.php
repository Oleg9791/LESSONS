<?php


abstract class Person
{
    protected string $name;
    protected string $age;

    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) > 3) {

            $this->name = $name;
        }
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    abstract public function say(): string;

    abstract public function doJob(): string;


}