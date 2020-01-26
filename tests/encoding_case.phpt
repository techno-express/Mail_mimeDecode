--TEST--
Bug #2364   Tabs in _quotedPrintableEncode()
--SKIPIF--
<?php require 'vendor/autoload.php'; ?>
--FILE--
<?php
$test = "Here's\t\na tab\n";
$part = new Mail_mimePart();
print $part->quotedPrintableEncode($test, 7);
?>
--EXPECT--
Here's=
=09
a tab
