<?php

$text = 'Highly irregular was the time I found a human foot in a toaster oven';

var_dump(preg_match('  #toaster#', $text));
var_dump(preg_match('+toaster+', $text));
var_dump(preg_match('&toaster&', $text));
