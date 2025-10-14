<?php

$numbers = [1, 7, 6, 9];
$total = 0;

foreach ($numbers as $v) {
    $total += $v;
}

print "average of \$numbers is " . $total / count($numbers) . "\n";

$album = [
    'title' => 'Number of the Beast',
    'artist'  => 'Iron Maiden',
    'details' => 'Work of genius',
];

foreach ($album as $k => $v) {
    print "'{$k}' has value: {$v}\n";
}

print "\$k = {$k} and \$v = {$v}\n";
