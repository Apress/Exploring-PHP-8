<?php

$postData = [
    'title' => 'Lulzsec',
    'name' => 'Mr Trustworthy',
    'age' => 49,
    'occupation' => '<script>window.alert("I control the browser now.")</script>',
];

print <<<EOS
<!DOCTYPE html>
<html>
  <head>
    <title>{$postData['title']}</title>
  </head>
  <body>
    <h1>{$postData['name']}</h1>
    <p>Age: {$postData['age']}</p>
    <p>Occupation: {$postData['occupation']}</p>
  </body>
</html>
EOS;
