<?php

$myArr1 = ["Alice", "Bob", "Russell"];
$myArr2 = ["Rita", "Sue"];

array_splice($myArr1, 1, 0, $myArr2); // offset = 2, length = 0
print_r($myArr1);
