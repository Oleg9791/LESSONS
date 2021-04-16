<?php


class Ol extends TList
{
    protected string $tagName = "Ol";
// второй вариант
//    public function html(): string
//    {
//        $html = parent::html();
//        return "<ol type='$this->type'>\n$html</ol>";
//    }
}
