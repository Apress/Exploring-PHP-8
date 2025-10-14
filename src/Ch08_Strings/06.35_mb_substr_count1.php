<?php

//mb_detect_order(['UTF-16', 'UTF-8', 'ASCII']);

$name = mb_convert_encoding("\u{C387} is a Hangul character", 'UTF-16'); // U+C387 is a Korean Hangul Syllable
var_dump(substr_count($name, "\u{C7}")); // U+00C7 is a Latin Capital C with Cedilla

//var_dump(bin2hex($name));
//var_dump(bin2hex("\u{C7}"));
//
//var_dump(substr_count($name, "\u{C387}"));
//var_dump(mb_substr_count($name, "\u{C7}", 'UTF-16'));
//
//var_dump(mb_detect_encoding($name));
//var_dump(mb_detect_encoding("\u{C387}"));