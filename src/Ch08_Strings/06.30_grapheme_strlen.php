<?php

$prideFlag = "\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}";
print $prideFlag . PHP_EOL;
var_dump(mb_strlen($prideFlag));
var_dump(bin2hex($prideFlag));
var_dump(grapheme_strlen($prideFlag));

$baldMan = "\u{1F468}\u{200D}\u{1F9B2}";
var_dump(mb_strlen($baldMan));
var_dump(grapheme_strlen($baldMan));
