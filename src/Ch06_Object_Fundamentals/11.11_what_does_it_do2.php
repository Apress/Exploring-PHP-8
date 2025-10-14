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

    public function showMembers(): void
    {
        print_r(get_class_vars(self::class));
        print_r(get_class_methods($this));
    }
}

(new Wizard())->showMembers();