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
    <main class="main-content">
      <p class="large">Para One</p>
      <p class="small">Para Two</p>
      <p class="small">Para Three</p>
    </main>
    <footer>Page footer</footer>
  </body>
</html>
EOS;

$dom = Dom\HTMLDocument::createFromString($html5);
$ancestor = $dom->querySelectorAll('*:has(p)');
print "Ancestors:" . PHP_EOL;
foreach ($ancestor as $node) {
    print $node->localName . PHP_EOL;
}

print PHP_EOL;

$parent = $dom->querySelectorAll('*:has(> p)');
print "Parent:" . PHP_EOL;
foreach ($parent as $node) {
    print $node->localName . PHP_EOL;
}

print PHP_EOL;
