<?php

'myFunc'();
('my' . 'Func')();

$my = 'my';
$func = 'Func';
($my . $func)();

function myFunc (): void
{
    print "Let's, ahem, get func-y" . PHP_EOL;
}
