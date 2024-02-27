<?php

namespace App\Cache;

use App\Interface\IDataDriver;

class CacheDataDriver implements IDataDriver
{
    const FILE = __DIR__ . '/cache.json';

    public function __construct()
    {
        if (!file_exists(self::FILE)) {
            file_put_contents(self::FILE, json_encode(array()));
        }
    }

    protected function getData():array
    {
        return json_decode(file_get_contents(self::FILE), true);
    }

    protected function setData($data): void
    {
        file_put_contents(self::FILE, json_encode($data));
    }

    public function findProduct(string $id): array
    {
        $cache = $this->getData();
        return $cache['products'][$id] ?? [];
    }

    public function saveProduct(array $product): void
    {
        $cache = $this->getData();
        $cache['products'][$product['id']] = $product;
        $this->setData($cache);
    }

    public function increaseProductRequests($id): void
    {
        $cache = $this->getData();
        if (!isset($cache['product_requests'])) {
            $cache['product_requests'] = [];
        }

        if (!isset($cache['product_requests'][$id])) {
            $cache['product_requests'][$id] = 1;
        } else {
            $cache['product_requests'][$id]++;
        }

        $this->setData($cache);
    }
}