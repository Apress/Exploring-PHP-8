<?php

function getVarName ()
{
    return 'stardateStr';
}

$stardateStr = 'Stardate 43996.2';

$obj = new class
{
    public function getEnemy(): string
    {
        return "Borg";
    }
};

$str = <<<TNG
Captain's log, {${getVarName()}}. The Enterprise remains concealed in the dust cloud. And, to my surprise, the 
{$obj->getEnemy()} have maintained their position waiting for us to come out of hiding. I have no explanation
for their special interest in me or this ship.
TNG;

print $str . PHP_EOL;

$str = <<< 'TNG'
Captain's log, {${getVarName()}}. The Enterprise remains concealed in the dust cloud. And, to my surprise, the 
{$obj->getEnemy()} have maintained their position waiting for us to come out of hiding. I have no explanation
for their special interest in me or this ship.
TNG;

print $str . PHP_EOL;