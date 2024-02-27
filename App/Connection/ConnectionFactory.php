<?php
namespace App\Connection;

use App\Interface\IDataDriver;

class ConnectionFactory
{
    public static function getDb(): IDataDriver
    {
        if (Config::getDriverType() === 'mysql'){
            return new MySQLToDataAdapter();
        }

        if (Config::getDriverType() === 'elastic'){
            return new ElasticToDataDriverAdapter();
        }
    }
}