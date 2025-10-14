<?php

$html5 = <<<EOS
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>HTML5 is lovely</title>
  </head>
  <body>
    <header>Page header</header>
    <main>Main content</main>
    <footer>Page footer</footer>
  </body>
</html>
EOS;

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html5);
print "Document loaded." . PHP_EOL;
var_dump(libxml_get_errors());
libxml_use_internal_errors(false);

print PHP_EOL;

$dom = new DOMDocument();
$dom->loadHTML($html5, LIBXML_NOERROR);
print "Document loaded." . PHP_EOL;
var_dump(libxml_get_errors());
