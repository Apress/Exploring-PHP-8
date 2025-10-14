<?php

$guitarsObj = new ArrayObject([
    ['make' => 'Ibanez', 'model' => 'RG-8570z' , 'price' => '£2100'],
]);

$guitarsArr = [
    ['make' => 'Ibanez', 'model' => 'RG-8570z' , 'price' => '£2100'],
];

addGuitar($guitarsObj);
addGuitar($guitarsArr);

print_r($guitarsObj);
print_r($guitarsArr);

function addGuitar (array|ArrayObject $arr) {
    $arr[] = ['make' => 'Fender', 'model' => 'American Ultra Stratocaster', 'price' => '£1800'];
}
