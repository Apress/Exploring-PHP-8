<?php

$sortFlags = [
    'regular' => SORT_REGULAR,
    'numeric' => SORT_NUMERIC,
    'string' => SORT_STRING,
];

$data =[
    'regular' => ['a', '-2', '-1', '-5.7', '-57', '0', '1'],
    'numeric' => ['a', '-2', '-1', '-5.7', '-57', '0', '1'],
    'string' => ['a', '-2', '-1', '-5.7', '-57', '0', '1'],
];

foreach ($data as $flag => $arr) {
    sort($arr, $sortFlags[$flag]);

    print "{$flag}: \t";

    foreach ($arr as $ele) {
        print "{$ele}\t";
    }

    print "\n";
}
