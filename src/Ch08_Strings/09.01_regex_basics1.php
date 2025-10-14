<?php

$text = 'Highly irregular was the time I found a human foot in a toaster oven';
$pattern = '/toaster/';
var_dump(preg_match($pattern, $text));
