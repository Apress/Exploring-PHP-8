<?php

interface CastSpell
{
    public function cast(): string;
}

enum WizardSpells: string implements CastSpell
{
    case MagicMissile = 'Thunk! Thunk! Thunk!';
    case Thunderwave = 'KABOOM!';

    public function cast(): string
    {
        return $this->value . PHP_EOL;
    }

    public static function panic(): void
    {
        print "You panic and fall over." . PHP_EOL;
    }
}

function doMagic(CastSpell $spell)
{
    print "You cast a spell, it goes " . $spell->cast();
}

doMagic(WizardSpells::MagicMissile);
doMagic(WizardSpells::Thunderwave);
