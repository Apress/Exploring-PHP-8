<?php

$xml = <<<EOS
<?xml version="1.0" encoding="UTF-8"?>
<data>
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

$results = $xpath->query(
    '/descendant::project[attribute::name="php"]'
);
print "Found {$results->length} matching node(s)" . PHP_EOL;
var_dump(get_class($results[0]));
var_Dump($results[0]->tagName);
var_Dump($results[0]->textContent);
