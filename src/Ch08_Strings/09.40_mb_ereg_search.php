<?php

$text = <<<EOS
Demelza: V\u{1EB1}n th\u{1EAF}n
Paul: C\u{01A1}m chi\u{00EA}n D\u{01B0}\u{01A1}ng Ch\u{00E2}u
EOS;
print $text . PHP_EOL;

mb_ereg_search_init($text);

mb_ereg_search('^\w+:\s');
print_r(mb_ereg_search_getregs());

print_r(mb_ereg_search_regs('[^,\r\n]+'));

mb_ereg_search('[\r\n]+');

print_r(mb_ereg_search_regs('\w+:\s'));
print_r(mb_ereg_search_regs('[^,\r\n]+'));

print PHP_EOL;
