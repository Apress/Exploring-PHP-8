<?php

$myArr1 = [1, 2];
$myArr2 = [3, 4, 5, 6];

$myAssocArr1 = ['lang' => 'PHP', 'ver' => '8.2'];
$myAssocArr2 = ['engine' => 'Zend', 'ver' => '5.6'];

print_r($myArr1 + $myArr2);
print_r($myAssocArr1 + $myAssocArr2);
