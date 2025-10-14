<?php

$array = [
    'interpolation',
    'a_key' => 'test',
];

$obj = new class
{
    public string $prop = 'String';
};

print "{$obj->prop} {$array[0]} {$array['a_key']}" . PHP_EOL;
