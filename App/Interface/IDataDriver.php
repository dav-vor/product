<?php
namespace App\Interface;

interface IDataDriver
{
    /**
     * @return string[]
     */
    public function findProduct(string $id): array;

    public function saveProduct(array $product): void;
}