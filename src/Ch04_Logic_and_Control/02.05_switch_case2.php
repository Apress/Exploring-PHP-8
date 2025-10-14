<?php

function logicDemo(string $var): void
{
    switch ($var) {
        case 'bar':
            print 'bar ';
        case 'foo':
            print 'foo ';
        case 'qux':
            print 'qux ';
    }
    print PHP_EOL;
}
logicDemo('qux');
logicDemo('foo');
logicDemo('bar');
