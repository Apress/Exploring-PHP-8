<?php

$text = 'Highly Irregular Was The Time';
preg_match_all('/[^A-Z]+/', $text, $matches);
print_r($matches[0]);