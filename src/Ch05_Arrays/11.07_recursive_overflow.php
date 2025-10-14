<?php

$struct =[
    ['Alice', 'Bob', 'Bob'],
    ['Alice', 'Bob', 'Bob'],
    ['Alice', 'Russell', 'Bob'],
    &$struct,
];

var_dump(recursive_array_count($struct));

function recursive_array_count(array $array, array &$ret = []): array {
    print "recursive_array_count() called\n";

    foreach ($array as $ele) {
        if (is_array($ele)) {
            recursive_array_count($ele, $ret);
        } else{
            (isset($ret[$ele])) ? $ret[$ele]++ : $ret[$ele] = 1;
        }
    }

    return $ret;
}