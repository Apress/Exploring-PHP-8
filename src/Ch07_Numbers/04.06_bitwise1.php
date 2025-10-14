<?php

$allOnes = 0xFF; // int(255) uses 8 bytes for storage on 64-bit systems
print decbin($allOnes) . PHP_EOL;
print decbin($allOnes << 1) . PHP_EOL;
print decbin($allOnes >> 1) . PHP_EOL;
