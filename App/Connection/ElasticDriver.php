<?php
namespace App\Connection;

use App\Interface\IElasticSearchDriver;

class ElasticDriver implements IElasticSearchDriver
{
    public function findById(string $id): array
    {
       return array('id'=> $id, 'product'=>'product '.$id, 'source'=>'elastic'); //fakedata
    }
}