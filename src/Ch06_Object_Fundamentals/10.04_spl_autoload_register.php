<?php

spl_autoload_register(function ($className) {
    $fileName = '10.01_' . $className . '.php';
    print "{$className} is not declared, attempting to load from ./{$fileName}" . PHP_EOL;
    require __DIR__ . DIRECTORY_SEPARATOR . $fileName;
});

$someClass = new SomeClass();
var_dump($someClass);
