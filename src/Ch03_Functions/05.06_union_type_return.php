<?php

function itsComplicated($in): int|string
{
    switch (gettype($in)) {
        case "string":
            return "You gave me a string";
        case "integer":
            return "You gave me an integer";
        default:
            return "I'm not sure what you gave me, perhaps we'll cover it in a later chapter?";
    }
}

print itsComplicated(new stdClass()) . PHP_EOL;
