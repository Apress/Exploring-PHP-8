<?php

class Foo
{
    public string $name = 'foo';
    private string $typeString = 'Instance of Foo';
    protected array $family = [
        'cat' => 'Jess',
        'humans' => ['Anna', 'Paul']
    ];
}

session_start();
print serialize(new Foo()) . PHP_EOL;

$_SESSION['data'] = new Foo();
print session_encode();

session_abort();
print PHP_EOL;
