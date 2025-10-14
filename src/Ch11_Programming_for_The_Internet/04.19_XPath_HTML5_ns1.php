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

$dom = Dom\HTMLDocument::createFromString($html5);
$xpath = new Dom\XPath($dom);
$results = $xpath->query('//footer');
print "Found {$results->length} matching node(s)";

print PHP_EOL;

if (!is_null($dom->documentElement->namespaceURI)) {
    $xpath->registerNamespace(
        'ns',
        $dom->documentElement->namespaceURI
    );
}

$results = $xpath->query('//ns:footer');
print "Found {$results->length} matching node(s)" . PHP_EOL;
var_dump($results[0]->textContent);

print PHP_EOL;
