<?php
    function zarplata($n, $m, $arr)
    {
        $table = '<table>';

        for ($i = 0; $i < $n; $i++) {

            $table .= '<tr>';



            for ($j = 0; $j < $m; $j++) {


                $table .= '<td>' . $arr[$i][$j] . '</td>';
            }

            $table .= '</tr>';
        }

        $table .= '</table>';
        return $table;
    }
