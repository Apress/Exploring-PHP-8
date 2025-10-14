<?php
declare(strict_types=1);

function doSomething(?string $in): ?string
{
    return ($in === null) ? null : 'Not null';
}

var_dump(doSomething('a string'));
var_dump(doSomething(null));