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
      <p>A simple demo of block level elements</p>
      <div>
        &#60;hgroup&#62; elements were deprecated in the HTML5 spec
      </div>
    </main>
  </body>
  After main element
</html>
EOS;

$dom = Dom\HTMLDocument::createFromString($validHtml);

var_dump($dom->body->childNodes);

foreach ($dom->body->childNodes as $child) {
    print "child is an instance of " . get_class($child) . PHP_EOL;
    var_dump($child->nodeType);
}
