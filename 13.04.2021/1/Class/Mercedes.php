<?php

class Mercedes extends Auto
{
    public function drive(): string
    {
        if ($this->bak > 0) {
            $this->rashodtopliva(15);
            return "Я езжу очень быстро";
        }
        return "Кончилось топливо";
    }


}
