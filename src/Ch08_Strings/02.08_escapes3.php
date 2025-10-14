<?php

var_dump(bin2hex("\400")); // octal 377 + 1
var_dump(bin2hex("\x100")); // hex FF + 1
