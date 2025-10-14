<?php

#[Attribute]
class Healer
{
}

#[Attribute]
class Fighter
{
}

#[Healer]
class Cleric
{
}

#[Fighter]
class Barbarian
{
}

#[Fighter]
#[Healer]
class Monk
{
}

class Party
{
    private array $healers = [];
    private array $fighters = [];

    public function addMember(Cleric|Barbarian|Monk $member)
    {
        $refObject = new ReflectionObject($member);
        $refAttrs = $refObject->getAttributes();
        foreach ($refAttrs as $attr) {
            if ($attr->getName() === Healer::class) {
                $this->healers[] = $member;
            }
            if ($attr->getName() === Fighter::class) {
                $this->fighters[] = $member;
            }
        }
    }

    public function getHealers(): array
    {
        return $this->healers;
    }
    public function getFighters(): array
    {
        return $this->fighters;
    }
}

$friartuck = new Monk();
$conan = new Barbarian();
$galadriel = new Cleric();

$genremuddle = new Party();

$genremuddle->addMember($friartuck);
$genremuddle->addMember($conan);
$genremuddle->addMember($galadriel);

var_dump($genremuddle->getHealers());
var_dump($genremuddle->getFighters());
