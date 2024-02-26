<?php
namespace App\Interface;

interface IElasticSearchDriver
{
    /**
     * @return string[]
     */
    public function findById(string $id): array;
}