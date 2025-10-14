<?php

//ini_set('memory_limit', '256M');

$arr = range(0,1000000);

foreach ($arr as $val)  {
    // do something
}

print "Peak memory usage " .  memory_get_peak_usage() . "\n";