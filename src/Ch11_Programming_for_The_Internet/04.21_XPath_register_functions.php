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
$xpath->registerNamespace('ns', $dom->documentElement->namespaceURI);
$xpath->registerNamespace('php', 'http://php.net/xpath');

$xpath->registerPhpFunctions(['containsLovely' => function (array|string $arg) {
    print "calling containsLovely() ..." . PHP_EOL;
    if (is_string($arg)) {
        print "testing a string ..." . PHP_EOL;
        return str_contains($arg, 'lovely');
    }

    foreach ($arg as $node) {
        if ($node->nodeType == XML_ELEMENT_NODE) {
            print "testing a Dom\Element ..." . PHP_EOL;
            return str_contains($node->textContent, 'lovely');
        }
    }

    return false;
}]);

$result = $xpath->query(
    '//ns:head[php:function("containsLovely", ns:title)]'
);
print "Found {$result->length} matching node(s)" . PHP_EOL;

print PHP_EOL;

$result = $xpath->query(
    '//ns:head/ns:title[php:functionString("containsLovely", .)]'
);
print "Found {$result->length} matching node(s)" . PHP_EOL;

print PHP_EOL;


