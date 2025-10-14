<?php

$weirdString = "So long, and thanks\x00for all the fish.";

print_r(explode("\x00", $weirdString));
