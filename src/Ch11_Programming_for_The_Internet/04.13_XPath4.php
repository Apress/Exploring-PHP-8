<?php

$xml = <<<EOS
<?xml version="1.0" encoding="UTF-8"?>
<data>
  <documents>
    <git>
      <project class="javascript code">Lovely JS</project>
      <project name="php">Lovely PHP</project>
      <project name="VB6" status="abandoned">Nasty VB6</project>
      <project>EMPTY</project>
    </git>
  </documents>
</data>
EOS;

$dom = Dom\XMLDocument::createFromString($xml);
$xpath = new Dom\XPath($dom);

$results = $xpath->query('//project[@class="code"]');
print "Found {$results->length} matching node(s)" . PHP_EOL;

print PHP_EOL;

$results = $xpath->query(
    '//project[contains(@class, "code")]'
);
print "Found {$results->length} matching node(s)" . PHP_EOL;
var_dump($results[0]->textContent);
