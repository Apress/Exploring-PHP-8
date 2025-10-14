<?php

preg_match_all('/(USD)?\s(?(1)(\d+))/', 'USD 150', $matches);
print_r($matches);
