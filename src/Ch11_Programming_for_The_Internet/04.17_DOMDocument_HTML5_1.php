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

$dom = new DOMDocument();
$dom->loadHTML($html5);

print PHP_EOL;

$nodes = $dom->getElementsByTagName('header');
print "Found {$nodes->length} matching node(s)" . PHP_EOL;
var_dump($nodes[0]->textContent);

print PHP_EOL;

$xpath = new DOMXPath($dom);
$results = $xpath->query('//footer');
print "Found {$results->length} matching node(s)" . PHP_EOL;
var_dump($results[0]->textContent);
