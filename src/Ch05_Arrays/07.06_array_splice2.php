<?php

$myArr1 = ["Alice", "Bob", "Russell"];
$myArr2 = ["Rita", "Sue"];

array_splice($myArr1, 2, null, $myArr2); // offset = 1, length = null
print_r($myArr1);
