<?php

$arr = ['duck', 'duck', 'duck', 'goose', 'duck'];

$count = 0;
foreach ($arr as $val) {
    $count++;
    if ($val === 'duck') {
        continue;
    }
    print "Found a goose!" . PHP_EOL;
}
print "Visited {$count} elements.";

print PHP_EOL;
