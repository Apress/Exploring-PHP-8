<?php

function boom()
{
    throw new Exception("Emergency... there's an emergency going on.");
    print "I'll never be reached...";
}

try {
    boom();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}

print "It's still going on.";

print PHP_EOL;
