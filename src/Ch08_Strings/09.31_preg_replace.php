<?php

$text = 'I contain no digits.';
print 'Filter: ' . preg_filter('/\d+/', '!', $text);
print PHP_EOL;
print 'Replace: ' . preg_replace('/\d+/', '!', $text);

print PHP_EOL;
