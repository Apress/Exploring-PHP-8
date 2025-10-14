<?php

function testSuperglobal(): void
{
    $GLOBALS['foo'] = 'foo';
}

testSuperglobal();
var_dump($GLOBALS['foo']);
