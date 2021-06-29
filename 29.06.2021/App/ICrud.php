<?php
namespace App;

interface ICrud
{
    /**
     * @return $this
     */
    public function create(array $row): static;

    /**
     * @return array
     */
    public function read(): array;

    /**
     * @return $this
     */
    public function update(int $id, array $row): static;

    /**
     * @return $this
     */
    public function delete(int $id): static;
}