<?php


namespace App;


class JsonTable extends AbstractTable implements ICrud
{

    /**
     * @return array
     */
    public function read(): array
    {
        if (file_exists($this->fileName)) {
            return json_decode(file_get_contents($this->fileName), true);

        } else {
            return [];
        }
    }


    /**
     * @param array $table
     */
    protected function save(array $table): void
    {
        file_put_contents($this->fileName, json_encode($table, JSON_FORCE_OBJECT));

    }

}