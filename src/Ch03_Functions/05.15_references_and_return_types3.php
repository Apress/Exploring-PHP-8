<?php

function &getNull(): void
{
    static $val = null;
    return $val;
}

$ref = &getNull();