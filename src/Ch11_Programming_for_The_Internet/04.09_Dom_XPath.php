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
$ns = $dom->documentElement->namespaceURI;
if (!is_null($ns)) {
    $xpath->registerNamespace('ns', $ns);
}

//$paras = $xpath->query('//ns:h1//ns:div');
$paras = $xpath->query('/descendant::ns:p/attribute::id');

var_dump($paras[0]);
var_dump($paras[1]);
