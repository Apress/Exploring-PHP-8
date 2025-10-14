<?php

$heredoc = <<< IDENTIFIER
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
do eiusmod tempor incididunt ut labore et dolore magna aliqua.
IDENTIFIER;

print $heredoc . PHP_EOL;

$heredoc = <<< TNG
    Captain's log, stardate 43930.7. The Enterprise has been in attendance at the biennial Trade Agreements Conference
        on Betazed. For the first time, the Ferengi are present...
  TNG;

print $heredoc . PHP_EOL;
