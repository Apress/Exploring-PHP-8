<?php

$text = 'hello hello world world';
preg_match_all('/(\w+) \1/', $text, $matches);
print_r($matches);
