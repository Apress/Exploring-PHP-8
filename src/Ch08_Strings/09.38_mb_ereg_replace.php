<?php

$text = "\u{142}ukasz";
print $text . PHP_EOL;
print mb_ereg_replace('\x{142}', "\u{141}", $text);

print PHP_EOL;

print mb_eregi_replace('(\x{141}\w+)', 'My buddy \1', $text);

print PHP_EOL;
