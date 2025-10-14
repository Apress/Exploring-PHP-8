<?php

$text = 'brown bread, green apples, orange er... oranges';
preg_match_all('/brown|green|orange/', $text, $matches);
print_r($matches[0]);
