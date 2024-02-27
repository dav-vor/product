<?php
namespace App\Connection;

use App\Interface\IDataDriver;
use App\Interface\IElasticSearchDriver;

class ElasticToDataDriverAdapter implements IDataDriver
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