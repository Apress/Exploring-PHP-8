<?php

spl_autoload_register(function ($class) {
    print "LOADING : {$class} from namespace " . __NAMESPACE__ . PHP_EOL;
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
});

$class = new \MyApplication\SomeClass();
var_dump($class);
