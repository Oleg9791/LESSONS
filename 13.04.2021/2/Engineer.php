<?php


class Engineer extends Person
{
    public function say(): string
    {
        return "Я инженер, меня зовут $this->name";
    }

    public function doJob(): string
    {
        return "Я умею вычислять";
    }

}