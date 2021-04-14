<?php

class Student extends Person
{
    public function say(): string
    {
        return "Я студент, меня зовут $this->name";
    }

    public function doJob(): string
    {
        return "Я умею учиться";
    }
}