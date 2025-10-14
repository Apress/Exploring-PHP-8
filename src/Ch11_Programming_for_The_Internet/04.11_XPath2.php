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
    '/child::data/descendant::git/child::project/attribute::*'
);
var_dump($results);

print PHP_EOL;

foreach ($results as $node) {
    print get_class($node) . " has value: {$node->value}" . PHP_EOL;
}

print PHP_EOL;

foreach ($results as $node) {
    print "Parent contains : {$node->parentNode->textContent}" . PHP_EOL;
}
