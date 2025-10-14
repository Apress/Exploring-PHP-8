<?php

$text = '... I found a human foot ...';
preg_match_all('/\w/', $text, $matches);
print_r($matches[0]);
