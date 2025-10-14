<?php

$mainPara = '<p>consectetur adipiscing elit</p>';

print <<< EOS
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>The easiest page you'll ever create</title>
  </head>
  <body>
      <h1>Lorem ipsum dolor sit amet</h1>
      {$mainPara}
  </body>
</html>
EOS;
