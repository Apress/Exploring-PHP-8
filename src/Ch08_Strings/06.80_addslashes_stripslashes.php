<?php

$str = "Some data for use 'elsewhere'\x00";
$str = addslashes($str);

print $str . PHP_EOL;
print stripslashes($str);

print PHP_EOL;
