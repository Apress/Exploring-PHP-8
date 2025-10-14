<?php

$lebowski = new stdClass();
$lebowski->hates = 'The Eagles';

$theOtherLebowski = clone $lebowski;

var_dump($theOtherLebowski);
