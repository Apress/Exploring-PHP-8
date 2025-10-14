<?php

$myArr1 = ["Alice", "Bob", "Russell"];
$myArr2 = ["Rita", "Sue"];

array_splice($myArr1, 1, 1, $myArr2); // offset = 1, length = 1
print_r($myArr1);
