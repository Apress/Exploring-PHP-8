<?php

$validHtml = <<<EOS
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Block level element demo</title>
  </head>
  <body>
    <main>
      <h1>Top-level heading</h1>
      <p id="first_para">A simple demo of block level elements</p>
      <div>
        &#60;hgroup&#62; elements were deprecated in the HTML5 spec
      </div>
      <p class="another_para">...continuing demo...</p>
      <p class="another_para">End of the demo</p>
    </main>
  </body>
</html>
EOS;

$dom = Dom\HTMLDocument::createFromString($validHtml);
$xpath = new Dom\XPath($dom);

$queryOne = $xpath->query('//*[@id="first_para"]');
$queryTwo = $xpath->query('//*[@class="another_para"]');

print "Query returns instances of " . get_class($queryOne) . PHP_EOL;
print "... which contains instances of " . get_class($queryOne[0]) . PHP_EOL;

print PHP_EOL;

var_dump($queryOne[0]->id);
var_dump($queryTwo[0]->className);
var_dump($queryTwo[1]->className);
