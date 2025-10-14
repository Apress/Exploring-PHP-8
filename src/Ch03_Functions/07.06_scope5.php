<?php

outer();
inner();

function outer()
{
    function inner() {
        print "I am also global!". PHP_EOL;
    }
}
