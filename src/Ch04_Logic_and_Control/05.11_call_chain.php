<?php

function a()
{
    try {
        b();
    } finally {
        print "Uncaught in A..." . PHP_EOL;
    }
}
function b()
{
    try {
        c();
    } catch (Exception $e) {
        print "Caught in B..." . PHP_EOL;
        throw $e;
    }
}
function c()
{
    throw new Exception('Thrown in C...');
}

a();

print "never reached";

print PHP_EOL;
