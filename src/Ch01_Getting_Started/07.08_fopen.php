<?php

$handle = fopen(__DIR__ . '/data/sample.txt', 'r');
print fgets($handle);
print fgets($handle);
fclose($handle);
