<?php

$padLeft = "\t\r\n\v text";
$padRight = "text\x00\t\r\n\v ";

print ltrim($padLeft) . PHP_EOL;
print strlen(rtrim($padRight));

print PHP_EOL;

print (ltrim('aaabbbcccThe text we care about', 'abc')) . PHP_EOL;
print (rtrim('Also the text we care aboutzzzzzzxxxy', 'xyz')) . PHP_EOL;
print (trim('aabbcczzAnd this text tooxxxyyzzzaaa', 'abcxyz'));

print PHP_EOL;
