<?php

$stock = [
    ['brand' => 'VW',  'model'  => 'Golf GTI', 'value' => 20000],
    ['brand' => 'VW',  'model'  => 'Scirocco GTI', 'value' => 16000],
    ['brand' => 'VW',  'model'  => 'Corrado VR6', 'value' => 12000],
    ['brand' => 'Ford',  'model'  => 'Escort RS2000', 'value' => 35000],
    ['brand' => 'Ford',  'model'  => 'Sierra RS Cosworth', 'value' => 25000],
    ['brand' => 'Peugeot',  'model'  => '205 GTI', 'value' => 10000],
];

$stockTally = array_reduce(
    $stock,
    function (array $accumulator, array $element): array {
        $accumulator[$element['brand']] += $element['value'];
        return $accumulator;
    },
    ['VW' => 0, 'Ford' => 0, 'Peugeot'  => 0] // unset array keys now generate Warning errors in PHP8!
);

print_r($stockTally);
