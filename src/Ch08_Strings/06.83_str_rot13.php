<?php

print str_rot13("abcdef") . PHP_EOL;
print str_rot13("ABCdef") . PHP_EOL;
print str_rot13(str_rot13("I am not secure!"));

print PHP_EOL;
