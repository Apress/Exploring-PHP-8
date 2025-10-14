<?php

$str = 'hello';

write('hello');
write($str);
print glue('hello', 'again');

function write($in)
{
    print "{$in}" . PHP_EOL;
}

function glue($start, $end)
{
    return "{$start} {$end}"  . PHP_EOL;
}
