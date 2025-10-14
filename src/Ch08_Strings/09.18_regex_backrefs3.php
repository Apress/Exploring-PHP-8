<?php

$text = 'hello hello world world';
preg_match_all('/(?<thing>\w+) \g<thing>/', $text, $matches);
print_r($matches);
