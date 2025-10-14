<?php

$text = file_get_contents(
    'php://filter/read=string.toupper/resource=./data/sample.txt'
);
print $text;

print PHP_EOL;