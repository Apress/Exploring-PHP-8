<?php
$cars = [
    'car1' => [
        ['make', 'VW'], ['model', 'Golf GTI']
    ],
];

array_walk($cars, 'applySanity2', 'CHANGED_');
print "\n\nAfter applySanity2:\n";
print_r($cars);

function applySanity2 (&$val, &$key, $append)
{
    $key = $append . $key;
    $val = [
        $val[0][0] => $val[0][1],
        $val[1][0] => $val[1][1],
    ];
}
