<?php

function itsComplicated(int|string $in): string
{
    switch (gettype($in)) {
        case "string":
            return "You gave me a string";
        case "integer":
            return "You gave me an integer";
    }
}

print itsComplicated("string") . PHP_EOL;
print itsComplicated(1) . PHP_EOL;