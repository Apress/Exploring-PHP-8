<?php

$dti = new DateTime();
var_dump(spl_object_id($dti));
$dti2 = $dti->modify('+1 day');
var_dump(spl_object_id($dti2));

$dti = new DateTimeImmutable();
var_dump(spl_object_id($dti));
$dti2 = $dti->modify('+1 day');
var_dump(spl_object_id($dti2));
