<?php


class TicTac
{
    protected array $map;

    public function __construct($size)
    {
        $this->init($size);
    }

    /** возвращает карту
     * @return array
     */
    public function getMap(): array
    {
        return $this->map;
    }

    /** инициализация карты
     * @param int $size
     * @return $this
     */
    public function init(int $size): static
    {
        $this->map = [];
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $this->map[$i][$j] = "";
            }
        }
        return $this;
    }

    /** ставит крестик
     * @param int $i
     * @param int $j
     * @return $this
     */
    public function putCross(int $i, int $j): static
    {
//
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "X";
        }
        return $this;
    }

    /** ставит нолик
     * @param int $i
     * @param int $j
     * @return $this
     */
    public function putZero(int $i, int $j): static
    {
//
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "0";
        }
        return $this;
    }

    /** проверка победителя по строкам
     * @param $map
     * @return bool
     */
    public function checkWinnerByRow($map): bool
    {
        foreach ($map as $row) {
            if ($row[0] !== "") {
                $winner = true;
                for ($j = 1; $j < count($row); $j++) {
                    if ($row[$j] !== $row[$j - 1]) {
                        $winner = false;
                    }
                }
                if ($winner) {
                    return true;
                }
            }
        }
        return false;
    }

    /** определяет победителя по строкам или столбцам
     * @return bool
     */
    public function checkWinner()
    {
        return $this->checkWinnerByRow($this->map) or $this->checkWinnerByCol();
    }

    /** проверка победителя по строкам
     * @return bool
     */
    public function checkWinnerByCol() // транспонирование матрицы
    {
        $map = array_map(null, ...$this->map);
//        print_r($map);
        return $this->checkWinnerByRow($map);
    }

    /**
     * @param array $map
     */
    public function setMap(array $map): static
    {
        $this->map = $map;
        return $this;
    }

    /**
     * @return bool
     */
    public function checkWinnerByDiagonal(): bool
    {
        if ($this->map[0][0] !== "") {
//            $winner=true;
            for ($i = 1; $i < count($this->map); $i++) {
                if ($this->map[$i][$i] !== $this->map[$i - 1][$i - 1]) {
//                    $winner = false;
                    return false;
                }
            }
//            return $winner;
            return true;
        }
        return false;
    }




//    public function checkWinnerByPobochDiagonal(): bool
//    {
//        if ($this->map[count($this->map)-1][0] !== "") {
//            // $winner=true;
//            $j = 1;
//            for ($i = count($this->map) - 2; $i >= 0; $i--) {
//                if ($this->map[$i][$j] !== $this->map[$i + 1][$j - 1]) {
//                    // $winner = false;
//                    return false;
//                }
//                $j++;
//            }
//            return true;
//        }
//        return false;
//    }

    public function checkWinnerByPobochDiagonal(): bool
    {
        if ($this->map[count($this->map) - 1][0] !== "") {
            for ($i = 1; $i < count($this->map); $i++) {
                if ($this->map[count($this->map) - $i - 1][$i] !== $this->map[count($this->map) - $i][$i - 1]) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }

}