<?php

$input = "An\x00Outside Context Problem was the sort of thing most civilisations encountered just once";

print substr($input, 3, 23) . PHP_EOL;
