<?php
namespace App\Connection;

use App\Interface\IDriver;
use App\Interface\IElasticSearchDriver;

class ElasticToDriverBridge implements IDriver
{

    protected IElasticSearchDriver $elasticSearchDriver;

    public function __construct()
    {
        $this->elasticSearchDriver = new ElasticDriver();
    }

    public function findProduct(string $id): array
    {
       return $this->elasticSearchDriver->findById($id);
    }

    public function saveProduct(array $product): void
    {
        // TODO: Implement saveProduct() method.
    }
}