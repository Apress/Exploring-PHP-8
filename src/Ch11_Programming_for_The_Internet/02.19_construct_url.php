<?php

$url = 'https://www.cats.com:8080/nutters/jess?status=hungry#meow';
$components = parse_url($url);
print $components['scheme'] . '://'
    . $components['host'] . ':'
    . $components['port']
    . $components['path'] . '?'
    . $components['query'] . '#'
    . $components['fragment']
;

print PHP_EOL;
