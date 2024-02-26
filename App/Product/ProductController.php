<?php

namespace App\Product;

class ProductController
{
    protected ProductFacade $productFacade;

    public function __construct()
    {
        $this->productFacade = ProductFacade::getInstance();
    }


    public function detail(string $id): string
    {
        $product = json_encode($this->productFacade->getProduct($id));
        $this->productFacade->increaseProductRequests($id);
        return $product;
    }

}
