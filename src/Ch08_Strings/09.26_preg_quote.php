<?php

print preg_quote("/(\d+)-[^a-Z].*/");
print PHP_EOL;
print preg_quote("/(\d+)-[^a-Z].*/", '/');

print PHP_EOL;
