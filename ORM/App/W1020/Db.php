<?php

namespace W1020;

class Db
{
    protected \mysqli $mysqli;

    public function __construct(array $config)
    {
        $this->mysqli = new \mysqli($config["servername"], $config["username"], $config["password"], $config["dbname"]);
    }

    public function query(string $sql)
    {
        $result = $this->mysqli->query($sql);

        $res = [];

        while ($row = $result->fetch_assoc()) {
            $res[] = $row;
        }
        return $res;
    }

}