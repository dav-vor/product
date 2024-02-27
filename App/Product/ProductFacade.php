<?php
namespace App\Product;

use App\Cache\CacheDataDriver;
use App\Connection\ConnectionFactory;
use App\Utils\Singleton;
use App\Interface\IDataDriver;

class ProductFacade extends Singleton
{
    protected IDataDriver $db;
    protected IDataDriver $cache;

    protected function __construct()
    {
        $this->db = ConnectionFactory::getDb();
        $this->cache = new CacheDataDriver();
    }

    public function getProduct(string $id): array
    {
        $product = $this->cache->findProduct($id);
        if (empty($product)) {
            $product = $this->db->findProduct($id);
            $this->cache->saveProduct($product);
        }

        return $product;
    }

    public function increaseProductRequests($id)
    {
        $this->cache->increaseProductRequests($id);
    }
}