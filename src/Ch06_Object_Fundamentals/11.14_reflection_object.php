<?php

class Cleric
{
    public int $level = 2;
    private int $exp = 0;
    protected int $gold = 1;

    final public function prayerOfHealing(): void
    {
        // fix stuff
    }
}

$obj = new Cleric();
$refObj = new ReflectionObject($obj);

print "Class {$refObj->getShortName()} has the following properties..." . PHP_EOL;
foreach ($refObj->getProperties() as $refProp) {
    $modifiers = Reflection::getModifierNames($refProp->getModifiers());
    $modifiers = implode(' ', $modifiers);
    print "  {$modifiers} {$refProp->getType()->getName()}: ";
    print $refProp->getName() . PHP_EOL;
}
print "... and methods" . PHP_EOL;
foreach ($refObj->getMethods() as $refMethod) {
    $modifiers = Reflection::getModifierNames($refMethod->getModifiers());
    $modifiers = implode(' ', $modifiers);
    print "  {$modifiers} {$refMethod->getName()}(): ";
    print $refMethod->getReturnType()->getName() . PHP_EOL;
}

print PHP_EOL;
