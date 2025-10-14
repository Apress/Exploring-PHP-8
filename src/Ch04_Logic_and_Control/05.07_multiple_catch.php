<?php

function surpriseBoom()
{
    if (rand(1, 10) % 2 === 0) {
        notDefined();
    } else {
        print 1 / 0;
    }
}

try {
    surpriseBoom();
} catch (DivisionByZeroError $e) {
    print "DIVIDE BY ZERO... OH SHI-" . PHP_EOL;
} catch (Error $e) {
    print "{$e->getMessage()} caught in generic Error handler" . PHP_EOL;
}

print PHP_EOL;
