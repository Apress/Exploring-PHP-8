<?php

function logicDemo(string $var): void
{
    switch ($var) {
        case 'bar':
            print 'bar ';
            break;
        case 'foo':
            print 'foo ';
            break;
        case 'qux':
            print 'qux ';
            break;
    }
    print PHP_EOL;
}
logicDemo('bar');
