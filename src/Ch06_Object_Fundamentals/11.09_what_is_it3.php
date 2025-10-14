<?php

class Magician
{
}

class Alice extends Magician
{
}

class Niffin extends Alice
{
}

var_dump(get_parent_class(Niffin::class));
var_dump(get_parent_class(new Alice()));
var_dump(is_subclass_of(Niffin::class, Magician::class));
var_dump(is_subclass_of(new Alice, Magician::class));
