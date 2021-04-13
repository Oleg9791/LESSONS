<?php


class Lada extends Auto
{
    public function drive(): string
    {
        if ($this->bak > 0) {
            $this->rashodtopliva(8);

            return "Я езжу";
        }
        return "Кончилось топливо";
    }
}
