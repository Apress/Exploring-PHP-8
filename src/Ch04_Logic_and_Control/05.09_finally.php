<?php

print "Doing something explode-y" . PHP_EOL;

try {
    throw new Exception('Boom!');
} catch (Exception $e) {
    print "Exception caught!" . PHP_EOL;
} finally {
    print "Sweeping up the mess..." . PHP_EOL;
}

print "... and carrying on.";

print PHP_EOL;
