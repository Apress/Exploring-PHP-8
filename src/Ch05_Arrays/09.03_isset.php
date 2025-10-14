<?php

$amps = [
    'Marshall' => 'EL34',
    'Fender' => '',
    'Vox' => null,
];

print (isset($amps['Marshall'])) ? "Found a Marshall" . PHP_EOL : "";
print (isset($amps['Fender'])) ? "Found a Fender" . PHP_EOL : "";
print (isset($amps['Vox'])) ? "Found a Vox" . PHP_EOL : "";
print (isset($amps['Dumble'])) ? "Found a Dumble" . PHP_EOL : "";
