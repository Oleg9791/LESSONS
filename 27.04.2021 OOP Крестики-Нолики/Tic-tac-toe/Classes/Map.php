<?php


class Map extends TicTac
{
    /**
     * @param array $map
     * @return Map
     */
    public function setMap(array $map): static
    {
        $this->map = $map;
        return $this;
    }

    public function getHtmlTable(): string
    {
        $table = "";

        for ($i = 0; $i < count($this->map); $i++) {
            $table .= "<table border='1'>";

            for ($j = 0; $j < count($this->map); $j++) {
                if ($this->map[$i][$j] == "X") {
                    $table .= "<td style='width: 30px;height: 30px'>X</td>";

                } elseif ($this->map[$i][$j] == "0") {
                    $table .= "<td style='width: 30px;height: 30px'>0</td>";

                }

                if ($this->map[$i][$j] == "") {
                    $table .= "<td style='width: 30px;height: 30px'></td>";
                }
            }
        }
        $table .= "</table>";

        return $table;
    }

}