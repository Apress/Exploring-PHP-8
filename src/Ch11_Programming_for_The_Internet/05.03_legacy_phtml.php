<?php ob_start(); ?>
<!DOCTYPE html>
<?php $mainPara = '<p>consectetur adipiscing elit</p>' ?>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>The easiest page you'll ever create</title>
  </head>
<body>
  <h1>Lorem ipsum dolor sit amet</h1>
  <?= $mainPara ?>
  </body>
</html>
