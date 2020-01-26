--TEST--
Bug #13962  Multiple header support
--SKIPIF--
<?php require 'vendor/autoload.php'; ?>
--FILE--
<?php

$mime = new Mail_mime();

$mime->setFrom('user@from.example.com');
$r = $mime->txtHeaders(array('Received' => array('Received 1', 'Received 2')));

print_r($r);
?>
--EXPECT--
Received: Received 1
Received: Received 2
MIME-Version: 1.0
From: user@from.example.com
