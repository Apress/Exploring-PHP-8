<?php

function gen_range(int $start, int $limit) {
    for  ($i = $start; $i <= $limit; $i++)  {
        yield $i;
    }
}

foreach (gen_range(0,1000000) as $val) {
    // do something
}

print "Peak memory usage " .  memory_get_peak_usage() . "\n";