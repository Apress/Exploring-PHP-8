<?php

$url = 'https://www.cats.com:8080/nutters/jess?status=hungry#meow';

var_dump(parse_url($url));

var_dump(parse_url($url, PHP_URL_QUERY));
