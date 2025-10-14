<?php

function strange(): string
{
    return 'wibble';
}

$wibble = 'an odd design choice';

print "This is {strange()}" . PHP_EOL;
print "This is {${strange()}}" . PHP_EOL;

$obj = new class
{
    public function fine(): string
    {
        return 'And this is just fine!';
    }
};

print "{$obj->fine()}" . PHP_EOL;
