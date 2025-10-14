<?php

session_start();

// if no 'visits' key in session, initialise at 0
$_SESSION['visits'] = $_SESSION['visits'] ?? 0;
$_SESSION['visits']++;

var_dump($_SESSION);
var_dump(htmlspecialchars(SID));
