<?php

$xml = <<<EOS
<?xml version="1.0" encoding="UTF-8"?>
<data>
  <projects>
    <project class="software javascript">
      <codebase name="frontend" status="live">
        React with 10k dependencies
      </codebase>
      <codebase name="microservice" status="live">
        node.js with 10k dependencies
      </codebase>
      <codebase name="concept" status="wip">WIP CONCEPT</codebase>
    </project>
    <project class="software php">
      <codebase name="website" status="live">
        It's honest work
      </codebase>
    </project>
    <project class="software vb6">
      <codebase name="legacy_horror" status="eol">
        I was there... 3000 years ago
      </codebase>
    </project>
    <project class="book">
      <book title="Exploring PHP8" status="unfinished">
        Deadlines make a whistling noise as they fly past
      </book>
    </project>
  </projects>
</data>
EOS;

$dom = Dom\XMLDocument::createFromString($xml);
$xpath = new Dom\XPath($dom);

$results = $xpath->query('//project[contains(@class, "software")]');
print "Found {$results->length} matching node(s)" . PHP_EOL;

print PHP_EOL;

$results = $xpath->query('//project[contains(@class, "software")]/codebase');
foreach ($results as $node) {
    var_dump(trim($node->textContent));
}

print PHP_EOL;
