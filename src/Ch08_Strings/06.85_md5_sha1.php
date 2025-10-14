<?php

print md5('some data') . PHP_EOL;
print bin2hex(md5('some data', true)); // returns binary value

print PHP_EOL;

print sha1('some data') . PHP_EOL;
print bin2hex(sha1('some data', true)); // returns binary value

print PHP_EOL;