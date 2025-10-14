<?php

$guitars = [
	'Suhr',
    'Stratocaster',
    'Stratocaster',
];

$axe = array_find(
	$guitars,
	fn ($val): bool => strlen($val) > 4
);
$index = array_find_key(
	$guitars,
	fn ($val): bool => strlen($val) > 4
);

print "Let's play the {$axe} today." . PHP_EOL;
print "It's the one in position {$index}";

print PHP_EOL;
