<?php

session_start();

$_SESSION['data'] = new Class {
    private string $cat = 'Jess';
};
