<?php

$validHtml = <<<EOS
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Block level element demo</title>
  </head>
  <body>
    Before main element
    <main>
      <h1>Top-level heading</h1>
      <p>A simple demo of block level elements</p>
      <div>
        &#60;hgroup&#62; elements were deprecated in the HTML5 spec
      </div>
    </main>
    After main element
  </body>
</html>
EOS;

$dom = Dom\HTMLDocument::createFromString($validHtml);

foreach ($dom->body->childNodes as $child) {
    if ($child->nodeType === XML_TEXT_NODE) {
        var_dump($child->data);
    }

    if ($child->nodeType === XML_ELEMENT_NODE) {
        var_dump($child->tagName);
    }
}
