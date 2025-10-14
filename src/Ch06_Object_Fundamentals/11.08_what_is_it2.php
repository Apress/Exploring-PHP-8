<?php

class Magician
{
    public static function staticDebug(): void
    {
        var_dump(get_called_class());
    }

    public function debug(): void
    {
        var_dump(get_called_class());
    }
}

class Quentin extends Magician
{
}

$magician = new Magician();
$quentin = new Quentin();

$magician::staticDebug();
$magician->debug();
$quentin::staticDebug();
$quentin->debug();
