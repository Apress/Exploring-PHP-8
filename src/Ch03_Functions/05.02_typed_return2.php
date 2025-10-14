<?php
declare(strict_types=1);

function getPi(): float
{
    return '3.14159265'; // is not a float, strict mode is on, TypeError
}

print getPi();
