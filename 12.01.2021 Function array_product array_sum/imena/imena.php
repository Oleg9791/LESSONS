<?php
$list = ["Леша", "Петя", "Саша", "Ваня"];

function imena($array)
{
    $html = "<ul>\n";
    foreach ($array as  $value) {
        $html .= "\t<li>$value</li>\n";
    }
    $html .= "</ul>\n";
    return $html;
}
echo imena($list);
