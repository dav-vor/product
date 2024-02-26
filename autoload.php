<?php

function my_autoloader($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    include __DIR__.'/'. $file . '.php';
}


