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
      <p class="small  ">Para Two</p>
      <p class="small">Para Three</p>
    </main>
    <footer>Page footer</footer>
  </body>
</html>
EOS;

$dom = Dom\HTMLDocument::createFromString($html5);
$xpath = new Dom\XPath($dom);
$xpath->registerNamespace('ns', $dom->documentElement->namespaceURI);
$main = $xpath->query('//ns:main')[0];

$firstPara = $dom->querySelector('main > p:first-child');
$lastPara = $dom->querySelector('main > p:last-child');

// $lastPara is inserted before $firstPara
$main->insertBefore($lastPara, $firstPara);

var_dump($lastPara->classList);

print PHP_EOL;

$lastPara->classList->remove('small');
$lastPara->classList->add('large');
$firstPara->classList->remove('large');
$firstPara->classList->add('small');

//// Using ::replace() instead of remove()/add()
//$lastPara->classList->replace('small', 'large');
//$firstPara->classList->replace('large', 'small');

print $dom->saveHTML();

print PHP_EOL;

