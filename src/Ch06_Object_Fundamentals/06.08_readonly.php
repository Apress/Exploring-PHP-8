<?php

class DataObj
{
    public readonly string $nonConstructedProp;

    public function __construct(
        public readonly string $someProp,
    ) {
    }

    public function setNonConstructedProp(string $val): void
    {
        $this->nonConstructedProp = $val;
    }
}

$obj = new DataObj('prop1');
var_dump($obj);
$obj->setNonConstructedProp('prop3');
$obj->setNonConstructedProp('prop4');
