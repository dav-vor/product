<?php

require __DIR__ . '/autoload.php';
spl_autoload_register('my_autoloader');

$controller = new \App\Product\ProductController();

$id = $_REQUEST['id'];
var_dump($controller->detail($id));
