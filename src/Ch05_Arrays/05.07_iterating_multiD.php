<?php

$guitars = [
    ['make' => 'Ibanez', 'model' => 'RG-8570z' , 'price' => '£2100'],
    ['make' => 'Fender', 'model' => 'American Ultra Stratocaster', 'price' => '£1800'],
];

foreach ($guitars as $guitar) {
    foreach ($guitar as $prop => $str) {
        print "{$prop}: {$str}\n";
    }
    print "\n";
}
