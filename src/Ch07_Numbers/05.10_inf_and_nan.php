<?php

var_dump(1 / INF); // float(0)
var_dump(NAN * INF); // float(NAN)
var_dump(INF / NAN); // float(NAN)