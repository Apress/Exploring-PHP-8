<?php

$fullText = file_get_contents(__DIR__ . '/data/sample.txt');
print $fullText;

print PHP_EOL;

$lines = file(__DIR__ . '/data/sample.txt');
print_r($lines);

print PHP_EOL;
