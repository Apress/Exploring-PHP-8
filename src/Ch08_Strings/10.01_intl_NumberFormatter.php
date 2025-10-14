<?php

$formatter = new NumberFormatter('fr_FR', NumberFormatter::DECIMAL);
print $formatter->format(1000000000.01);

print PHP_EOL;
