<?php
namespace App\Connection;

use App\Interface\IMySQLDriver;

class MySQLDriver implements IMySQLDriver
{
    public function findProduct(string $id): array
    {
        return array('id'=> $id, 'product'=>'product '.$id, 'source'=>'mysql'); //fakedata
    }
}