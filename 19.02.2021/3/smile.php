<?php
function smile($text)
{

    return preg_replace([
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
        [
            '😀',
            "😞",
            "😛",
            "😬"
        ], $text);
}

function cenzura($text)
{
    return preg_match_all("/.*дурак.*/iu", $text);
}
