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

print_r(get_class_methods($wiz));
print_r(get_object_vars($wiz));

print_r(get_class_methods(Wizard::class));
print_r(get_class_vars(Wizard::class));
