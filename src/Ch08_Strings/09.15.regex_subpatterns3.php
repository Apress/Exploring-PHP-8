<?php

$text = 'brown bread, green apples, orange er... oranges';
preg_match_all('/((br)own|(gr)een) (bread|apples)/', $text, $matches);
print_r($matches);
