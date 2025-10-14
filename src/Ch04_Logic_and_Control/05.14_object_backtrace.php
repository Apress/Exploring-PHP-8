<?php

class A
{
    public function doA(B $b)
    {
        $b->doB();
    }
}
class B
{
    public function doB()
    {
        print_r(debug_backtrace());
    }
}
$a = new A();
$a->doA(new B());
