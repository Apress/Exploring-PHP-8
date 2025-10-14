<?php

$obj = new stdClass();
$obj->childObj = new stdClass();
$obj->childObj->prop = 'Original property';

$cloned = clone $obj;
$obj->childObj->prop = 'New property';

var_dump($cloned->childObj);
