<?php

// Error and Exception classes both implement a Throwable interface
set_exception_handler(function (Throwable $t) {
    print "Oh dear, you fumbled that." . PHP_EOL;
    print $t->getMessage() . PHP_EOL;
});

throw new Exception('ASPLODE');

print "Everyone ok?";
