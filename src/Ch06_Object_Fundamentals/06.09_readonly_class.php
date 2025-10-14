<?php

readonly class DataObj
{
    public function __construct(
        public string $prop
    ) {
    }

    public function setProp(string $val): void
    {
        $this->prop = $val;
    }
}

$obj = new DataObj('prop1');
$obj->setProp('new val');
