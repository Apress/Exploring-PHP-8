<?php

$handle = fopen('https://github.com', 'r');
while (!feof($handle)) {
    print fgets($handle);
}

var_dump($handle);
fclose($handle);
var_dump($handle);
