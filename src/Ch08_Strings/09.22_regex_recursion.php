<?php

$text = 'aaabbb';
preg_match_all('/a(?R)?b/', $text, $matches);
print_r($matches[0]);
