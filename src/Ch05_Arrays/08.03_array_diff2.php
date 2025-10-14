<?php

var_dump(array_diff([1, 2, 3], [3, 2, 1]));
var_dump(array_diff(
    ['make' => 'VW', 'model' => 'Golf'],
    ['model' => 'Golf', 'make' => 'VW'],
));
var_dump(array_diff(['1', '2', '3'], [1, 2, 3])); // type juggling will happen here
