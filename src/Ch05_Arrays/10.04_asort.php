<?php

$words = ['foo', 'Bar', 'BAR', 'Foo'];
$assoc = ['foo' => 'foo', 'bar' => 'bar'];

asort($words);
asort($assoc);

print_r($words);
print_r($assoc);