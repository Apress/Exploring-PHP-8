<?php

var_dump(is_array([])); // bool(true)
var_dump(is_array(new ArrayObject())); // bool(false)
var_dump(is_iterable(new ArrayObject())); // bool(true)
var_dump(is_numeric(1)); // bool(true)
var_dump(is_numeric(1.1)); // bool(true)
var_dump(is_numeric('1')); // bool(true)
var_dump(isset($notDeclared)); // bool(false) - no error output
