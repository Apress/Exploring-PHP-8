<?php


$str = 'world';

print "\x48\x65\x6c\x6c\x6f $str" . PHP_EOL;

print <<<STR
Hello $str \n
STR;
