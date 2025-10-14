<?php

$text = <<<EOS
hello
world
EOS;
var_dump(preg_match_all('/o\nw/', $text));

print PHP_EOL;

var_dump(preg_match_all('/o\Rw/', $text));

print PHP_EOL;

var_dump(preg_match_all('/o\cjw/', $text));
var_dump(preg_match_all('/o\cJw/', $text));

print PHP_EOL;

var_dump(preg_match_all('/o\x0Aw/', $text));
var_dump(preg_match_all('/o\012w/', $text));
var_dump(preg_match_all('/o\12w/', $text));