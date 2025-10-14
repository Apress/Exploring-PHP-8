<?php

$indexed1 = [0, 1, 2];
$indexed2 = [0, 1, 2];
$indexed3 = ['0', 1, '2'];
$indexed4 = ['0' => '0', 1 => 1, '2' => '2'];

$assoc1 = ['make' => 'VW', 'model' => 'Golf', 'variant'  =>  'GTI'];
$assoc2 = ['variant'  =>  'GTI', 'make' => 'VW', 'model' => 'Golf'];

var_dump($indexed1 == $indexed2); // true
var_dump($indexed1 == $indexed3); // true
var_dump($indexed1 == $indexed4); // true

var_dump($indexed1 === $indexed2); // true
var_dump($indexed1 === $indexed3); // false
var_dump($indexed1 === $indexed4); // false

var_dump($assoc1 == $assoc2); // true
var_dump($assoc1 === $assoc2); // false
