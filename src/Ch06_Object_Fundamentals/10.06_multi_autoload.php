<?php

spl_autoload_register(function ($class) {
    $fullPath = __DIR__ . DIRECTORY_SEPARATOR
        . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.inc';


    if (file_exists($fullPath)) {
        print "Loading {$class} from {$fullPath}" . PHP_EOL;
        require $fullPath;
    }
});

spl_autoload_register(function ($class) {
    $fullPath = __DIR__ . DIRECTORY_SEPARATOR
        . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($fullPath)) {
        print "Loading {$class} from {$fullPath}" . PHP_EOL;
        require $fullPath;
    }
});

$class = new \MyApplication\SomeClass();
//print_r($class);
