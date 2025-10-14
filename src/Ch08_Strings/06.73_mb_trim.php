<?php

// null, space, \t \n \v \f default strip chars
$defaultASCII = "\x00 \t\n\v\f\r";
$higherChars = "\u{85}\u{A0}\u{1680}\u{180E}";
$genPunct = "\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}"
    . "\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}";
$ideoSpace = "\u{3000}";

$stripped = mb_ltrim(
    $defaultASCII
    . $higherChars
    . $genPunct
    . $ideoSpace
    . "That's a lot of stripping."
);

print $stripped . PHP_EOL;
print bin2hex($stripped);

print PHP_EOL;
print PHP_EOL;

// raw byte data for UTF-16BE string " utf-16"
$utf16 = "\x00\x20\x00\x75\x00\x74\x00\x66\x00\x2d\x00\x31\x00\x36";
print bin2hex($utf16) . PHP_EOL;
print bin2hex(ltrim($utf16)) . PHP_EOL;
print bin2hex(mb_ltrim($utf16, encoding: 'UTF-16BE'));

print PHP_EOL;
