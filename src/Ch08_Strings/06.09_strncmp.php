<?php

var_dump(strncmp("Fender Stratocaster", "Fender Telecaster", 5));
var_dump(strncmp("Fender Stratocaster", "Fender Telecaster", 8));
var_dump(strncmp("Fender\x00Stratocaster", "Fender\x00Telecaster", 8));
