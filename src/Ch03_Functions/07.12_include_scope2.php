<?php

$song = 'Hallowed Be Thy Name';

function printSong(): void {
    include __DIR__ . "/46_include_scope1.php";
};

printSong();
