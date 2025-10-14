<?php

session_start();

$now = time();
$_SESSION['expire'] = $_SESSION['expire'] ?? $now + 30;

if ($now > $_SESSION['expire']) {
    $_SESSION['obsolete'] = true;
    session_regenerate_id();
    unset($_SESSION['obsolete']);
    $_SESSION['expire'] = $now + 30;
    print "Session expired! Regenerated with new ID: " . session_id() . "\n";
} else {
    print "Session still active with ID: " . session_id() . "\n";
}
