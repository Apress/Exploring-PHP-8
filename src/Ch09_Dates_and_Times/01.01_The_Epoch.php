<?php

$epoch = new DateTime('1970-01-01 00:00:00');
var_dump($epoch->format(DateTime::ATOM));
var_dump($epoch->format(DateTime::COOKIE));
var_dump($epoch->format(DateTime::RFC7231));
var_dump($epoch->format(DateTime::W3C));

print PHP_EOL;

var_dump($epoch->getTimestamp());
