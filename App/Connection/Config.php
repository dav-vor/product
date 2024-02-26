<?php
namespace App\Connection;

class Config
{

    public static function getDriverType(): string
    {
        $jsonFilePath = dirname(__DIR__, 2) .'/config.json';
        $config = json_decode(file_get_contents($jsonFilePath, true));
        return $config->driver;
    }

}