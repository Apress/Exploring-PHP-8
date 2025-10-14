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
var_dump($dom->querySelectorAll('body p'));
var_dump($dom->querySelector('body p'));
var_dump($dom->querySelector('body p')->textContent);
