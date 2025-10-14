<?php

enum BardInstrument
{
    case Bagpipes;
    case Harp;
    case Zither;

    public const DEFAULT = self::Harp;
}

class Bard
{
    public function __construct(
        public BardInstrument $instrument
    ) {
    }
}

var_dump(new Bard(BardInstrument::Bagpipes));
var_dump(new Bard(BardInstrument::DEFAULT));
