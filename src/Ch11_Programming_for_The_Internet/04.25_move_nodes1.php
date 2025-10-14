<?php

use const Dom\HTML_NO_DEFAULT_NS;

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
    <img src="./foo.jpg" />
    <footer>Page footer</footer>
  </body>
</html>
EOS;

$dom = Dom\HTMLDocument::createFromString(
    $html5,
    HTML_NO_DEFAULT_NS
);
$xpath = new Dom\XPath($dom);
$main = $xpath->query('//main')[0];

$firstPara = $dom->querySelector('main > p:first-child');
$lastPara = $dom->querySelector('main > p:last-child');

// $lastPara is inserted before $firstPara
$main->insertBefore($lastPara, $firstPara);

print $dom->saveHTML($main);

print PHP_EOL;
print PHP_EOL;

print $dom->saveHTML();

print PHP_EOL;
