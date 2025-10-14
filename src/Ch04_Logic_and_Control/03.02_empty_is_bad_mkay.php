<?php

var_dump(empty($notDeclared)); // bool(true)
var_dump(empty(false)); // bool(true)
var_dump(empty(0)); // bool(true)
var_dump(empty(0.0)); // bool(true)
var_dump(empty('')); // bool(true)
var_dump(empty('0')); // bool(true)
var_dump(empty([])); // bool(true)
