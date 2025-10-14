<?php

$text = <<<EOS
Highly irregular...
Highly irregular...
Highly irregular...
EOS;

var_dump(preg_match_all('/^Highly/', $text));
var_dump(preg_match_all('/^Highly/m', $text));

print PHP_EOL;

var_dump(preg_match_all('/Highly/Am', $text));

print PHP_EOL;

var_dump(preg_match_all('/\.\.\.$/', $text));
var_dump(preg_match_all('/\.\.\.$/m', $text));
