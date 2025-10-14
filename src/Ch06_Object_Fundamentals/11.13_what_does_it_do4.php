<?php

class Cleric
{
    public int $level = 2;
    private int $exp = 0;
    protected int $gold = 1;

    public function prayerOfHealing(): void
    {
        // fix stuff
    }
}

print_r(get_mangled_object_vars(new Cleric()));
