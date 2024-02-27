<?php
namespace App\Connection;

use App\Interface\IDataDriver;
use App\Interface\IMySQLDriver;

class MySQLToDataAdapter implements IDataDriver
{

    protected IMySQLDriver $mySQLDriver;

    public function __construct()
    {
        $this->mySQLDriver = new MySQLDriver();
    }

    /**
     * @return string[]
     */
    public function findProduct(string $id): array
    {
        return $this->mySQLDriver->findProduct($id);
    }

    public function saveProduct(array $product): void
    {
        // TODO: Implement saveProduct() method.
    }
}