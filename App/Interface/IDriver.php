<?php
namespace App\Interface;

interface IDriver
{
    /**
     * @return string[]
     */
    public function findProduct(string $id): array;

    public function saveProduct(array $product): void;
}