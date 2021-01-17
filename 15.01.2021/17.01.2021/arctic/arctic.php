<?php
$arr1 = [
    [1, "Иванов", 500],
    [2, "Петров", 600],
    [3, "Сидоров", 700],
    [4, "Лихачев", 900]
];

function htmlTable($arr)
{

    $html = "<table width='700px' border='2px'>";
    foreach ($arr as  $rows) {
        $html .= "<tr>";
        foreach ($rows as  $cools) {
            $html .= "<td>$cools</td>";
        }

        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}
echo htmlTable($arr1);
