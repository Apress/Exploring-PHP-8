<?php

class SuperClass
{
    final public function doThing(): void
    {
    }
}

class SubClass extends SuperClass
{
    public function doThing(): void
    {
    }
}