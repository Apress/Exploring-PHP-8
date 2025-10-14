<?php

$xml = <<<EOS
<?xml version="1.0" encoding="UTF-8"?>
<!-- A document comment -->
<data>
  <!-- An element comment -->
  <documents>
    <git>
      <project name="javascript">Lovely JS</project>
      <project name="php">Lovely PHP</project>
      <project name="VB6" status="abandoned">Nasty VB6</project>
      <project>EMPTY</project>    
    </git>
  </documents>
</data>
EOS;

$dom = Dom\XMLDocument::createFromString($xml);
$xpath = new Dom\XPath($dom);

$results = $xpath->query('/child::data');
print "Found {$results->length} data node(s)" . PHP_EOL;
var_dump($results[0]->tagName);

$results = $xpath->query('/child::comment()');
print "Found {$results->length} comment node(s)" . PHP_EOL;
var_dump($results[0]->textContent);

$results = $xpath->query('/child::data/child::comment()');
print "Found {$results->length} comment node(s)" . PHP_EOL;
var_dump($results[0]->textContent);

print PHP_EOL;
