<?php

class Wizard
{
    public int $level = 1;
    private int $exp = 0;

    public function magicMissile(): void
    {
        // hurt stuff
    }

    protected function longRest(): void
    {
        // snooze
    }
}

$wiz = new Wizard();

var_dump(property_exists($wiz, 'level'));
var_dump(property_exists(Wizard::class, 'exp'));
var_dump(method_exists(Wizard::class, 'magicMissile'));
var_dump(method_exists($wiz, 'longRest'));
