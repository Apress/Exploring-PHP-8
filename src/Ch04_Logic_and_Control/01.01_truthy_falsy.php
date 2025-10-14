<?php

var_dump((bool) null); // bool(false)
var_dump((bool) 0); // bool(false)
var_dump((bool) 0.0); // bool(false)
var_dump((bool) []); // bool(false)
var_dump((bool) ['foo']); // bool(true)
var_dump((bool) ''); // bool(false)
var_dump((bool) 'literally anything'); // bool(true)
var_dump((bool) '0'); // bool(false)!
