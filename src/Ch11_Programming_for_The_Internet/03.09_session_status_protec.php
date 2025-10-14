<?php

session_start(['use_strict_mode' => true]);
print "sessionId: " . session_id() . "\n";
var_dump($_SERVER);
