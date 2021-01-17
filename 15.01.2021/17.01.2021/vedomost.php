<?php
$vedomost = [
    [1, "Иванов", 500],
    [2, "Петров", 600],
    [3, "Сидоров", 700],
    [4, "Титов", 900]
];

function zarplata($arr)
{

    $html = "<table border='2px' width='800px'>";

    foreach ($arr as  $row) {
        $html .= "<tr>";
        foreach ($row as  $col) {
            $html .= "<td>$col</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";


    return $html;
}
echo zarplata($vedomost);
