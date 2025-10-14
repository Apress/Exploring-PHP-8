<?php

$str = 'Gender: M, Height: 1.85m, Weight: 95kg';
var_dump(sscanf($str, 'Gender: %1s, Height: %fm, Weight: %dkg'));

print  PHP_EOL;

$str = "Gender:   M, Height:\t1.85m, Weight:   95kg";
sscanf($str, 'Gender: %*1s, Height: %fm, Weight: %dkg', $height, $weight);
var_dump($height, $weight);
