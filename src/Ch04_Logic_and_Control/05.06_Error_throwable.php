<?php

try {
    notDefined();
} catch (Error $e) {
    print "Caught an Error" . PHP_EOL;
    print $e->getMessage() . PHP_EOL;
}

print "Carrying on..." . PHP_EOL;
notDefined();
