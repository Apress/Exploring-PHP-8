<?php

var_dump(mb_ereg_match('\x{141}\w+', "\u{142}ukasz"));
var_dump(mb_ereg_match('\x{141}\w+', "\u{142}ukasz", 'i'));

print PHP_EOL;

mb_regex_set_options('i');
var_dump(mb_ereg_match('\x{141}\w+', "\u{142}ukasz"));

print PHP_EOL;

mb_regex_set_options('ix');
var_dump(mb_ereg_match('\w+ \s \w+ \s \x{141}\w+', "My buddy \u{142}ukasz"));

print PHP_EOL;
