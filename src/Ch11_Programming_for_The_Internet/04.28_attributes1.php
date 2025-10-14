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
$meta = $dom->querySelector('head meta:first-child');
var_dump($meta->attributes);
foreach ($meta->attributes as $attr) {
    var_dump($attr);
}

print PHP_EOL;

var_dump($meta->attributes->getNamedItem('charset'));

//var_dump($meta->getAttribute('charset'));
