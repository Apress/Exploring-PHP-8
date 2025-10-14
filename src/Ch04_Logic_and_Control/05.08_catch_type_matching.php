<?php

try {
    throw new DivisionByZeroError("I divided by zero. :(");
} catch (Error $e) {
    print "{$e->getMessage()} caught in generic Error handler" . PHP_EOL;
} catch (DivisionByZeroError $e) {
    print "DIVIDE BY ZERO... OH SHI-" . PHP_EOL;
}

print PHP_EOL;
