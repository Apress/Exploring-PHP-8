<?php

$rogueAgents = [
    'Aaron Keener',
    'Theo Parnell',
    'Alani Kelso',
];

$count = count($rogueAgents);
for ($i = 0; $i < $count; $i++) {
    print $rogueAgents[$i] . PHP_EOL;
}

print PHP_EOL;

foreach ($rogueAgents as $agent) {
    print $agent . PHP_EOL;
}

print PHP_EOL;

foreach ($rogueAgents as $agent) {
    if ($agent === 'Alani Kelso') {
        break;
    }
    print $agent . PHP_EOL;
}

print PHP_EOL;
