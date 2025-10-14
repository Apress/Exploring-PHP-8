<?php

namespace MyApplication;

use MyApplication\SubNamespace\SomeOtherClass;
use MyApplication\SubNamespace\ThisClassOverHere;

class SomeClass
{
    private $otherClass;
    private $thisClassOverHere;

    public function __construct()
    {
        $this->otherClass = new SomeOtherClass();
        $this->thisClassOverHere = new ThisClassOverHere();
    }
}
