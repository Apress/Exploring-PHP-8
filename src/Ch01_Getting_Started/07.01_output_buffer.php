<?php

ob_start();

print "What are we holding onto, Sam?";
print PHP_EOL;
print "That there's some good in this world, Mr. Frodo... and it's worth fighting for";

$buffered = ob_get_clean();
print "Buffer contents:" . PHP_EOL;
print $buffered;

print PHP_EOL;
