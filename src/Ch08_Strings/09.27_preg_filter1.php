<?php

$text = 'I like bananas, oranges, and apples.';
print preg_filter('/(bananas|oranges|apples)/', 'fruit', $text);

print PHP_EOL;
