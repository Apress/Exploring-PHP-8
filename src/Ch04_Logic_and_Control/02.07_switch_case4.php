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
        default:
            print 'default ';
            break;
    }
    print PHP_EOL;
}
logicDemo('wibble');
