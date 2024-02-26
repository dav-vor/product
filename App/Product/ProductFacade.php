<?php
namespace App\Product;

use App\Cache\CacheDriver;
use App\Connection\ConnectionFactory;
use App\Utils\Singleton;
use App\Interface\IDriver;

class ProductFacade extends Singleton
{
    protected IDriver $db;
    protected IDriver $cache;

    protected function __construct()
    {
        $this->db = ConnectionFactory::getDb();
        $this->cache = new CacheDriver();
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