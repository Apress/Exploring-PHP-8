<?php

$url = 'https://localhost/whatever?complex[]=data&complex[]=here';
parse_str(parse_url($url, PHP_URL_QUERY), $query);
var_dump($query);
