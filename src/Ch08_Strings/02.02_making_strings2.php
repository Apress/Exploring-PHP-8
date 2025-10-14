<?php

$date = new DateTime();
$foo = new Foo();

print "The date is {$date->format('Y-m-d')}" . PHP_EOL;
print "Foo is {$foo->getFoo()}" . PHP_EOL;

class Foo
{
    public function getFoo(): string
    {
        return 'Foo';
    }
}