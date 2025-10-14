<?php

enum WizardSpells: string
{
    case Thunderwave = 'KABOOM!';
    public static function panic(): void
    {
        print "You panic and fall over." . PHP_EOL;
    }
}

WizardSpells::panic();
print "You recover and cast a noisy spell... " . WizardSpells::Thunderwave->value . PHP_EOL;
WizardSpells::Thunderwave->panic();
var_dump(WizardSpells::Thunderwave);