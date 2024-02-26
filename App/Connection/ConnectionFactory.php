<?php
namespace App\Connection;

use App\Interface\IDriver;

class ConnectionFactory
{
    public static function getDb(): IDriver
    {
        if (Config::getDriverType() === 'mysql'){
            return new MySQLToDriverBridge();
        }

        if (Config::getDriverType() === 'elastic'){
            return new ElasticToDriverBridge();
        }
    }
}