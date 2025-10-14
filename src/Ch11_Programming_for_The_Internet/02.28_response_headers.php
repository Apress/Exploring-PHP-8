<?php

$headers = apache_response_headers();
header("X-Powered-By: none/of-your-business");
var_dump($headers);
print "Thanks for visiting!";
