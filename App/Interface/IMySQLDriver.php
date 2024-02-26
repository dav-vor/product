<?php
namespace App\Interface;

interface IMySQLDriver
{
    /**
     * @return string[]
     */
    public function findProduct(string $id): array;
}