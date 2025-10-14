<?php

#[Deprecated(message: 'Time to migrate!', since: '1.0')]
function oldFunc(): string {
    return 'Use something else' . PHP_EOL;
}

print oldFunc();
