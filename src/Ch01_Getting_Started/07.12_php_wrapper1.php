<?php

$handle = fopen("php://stdout", 'w');
fwrite($handle, "Hi there!\n");
fclose($handle);

print PHP_EOL;
