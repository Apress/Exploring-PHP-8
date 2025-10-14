<?php

$artists = [
    'Jimi Hendrix' => 'Stratocaster',
    'Eric Clapton' => 'Les Paul',
    'Dave Gilmour' => 'Stratocaster',
];

$anyStrats = array_any(
	$artists,
	fn ($val): bool => $val === 'Stratocaster'
);
$allStrats = array_all(
	$artists,
	fn ($val): bool => $val === 'Stratocaster'
);

var_dump($anyStrats);
var_dump($allStrats);

print PHP_EOL;
