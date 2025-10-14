<?php

interface Foo
{
    public function doFoo();
}

interface Bar extends Foo
{
    public function doBar();
}

class FooBar implements Bar
{
    public function doBar()
    {
        // bar things...
    }
}