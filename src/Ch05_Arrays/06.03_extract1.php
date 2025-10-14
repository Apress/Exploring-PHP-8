<?php

$arr1 = [
    'a' => 'Alice',
    'b' => 'bob',
];

$arr2 = ['Alice', 'Bob'];

extract($arr1);
extract($arr2, EXTR_PREFIX_ALL, 'student');

print "\$a: {$a}\n";
print "\$b: {$b}\n";
print "\$student_0: {$student_0}\n";
print "\$student_1: {$student_1}\n";
