<?php

$struct = [
    ['Alice', 'Bob', 'Bob'],
    ['Alice', 'Bob', 'Bob'],
    ['Alice', 'Russell', 'Bob'],
];

print_r(recursive_array_count($struct));

function recursive_array_count(array $array, array &$ret = []): array {
    foreach ($array as $ele) {
        if (is_array($ele)) {
            recursive_array_count($ele, $ret);
        } else{
            (isset($ret[$ele])) ? $ret[$ele]++ : $ret[$ele] = 1;
        }
    }

    return $ret;
}
