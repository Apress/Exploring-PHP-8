<?php

$arr = [1, 2, 3];
for ($i = 0, $size = count($arr); $i < $size; $i++) {
    $arr[$i]++;
}
print_r($arr);