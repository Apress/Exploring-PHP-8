<?php

$obj = new stdClass();

var_dump(get_class($obj));
var_dump(is_a($obj, 'stdClass'));
var_dump(is_a($obj, stdClass::class));
