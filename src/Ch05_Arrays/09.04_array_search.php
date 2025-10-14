<?php

$arr = ['Alice', 'Bob', 'Russell'];

$artists = [
    'Jimi Hendrix' => 'Stratocaster',
    'Eric Clapton' => 'Les Paul',
    'Dave Gilmour' => 'Stratocaster',
];

print "Bob is element no. " . array_search('Bob', $arr) . "\n";
print array_search('Stratocaster', $artists) . " played a Stratocaster\n";

//var_dump(array_intersect($artists, ['Stratocaster']));
