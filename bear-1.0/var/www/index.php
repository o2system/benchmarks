<?php

// Adhoc fix for benchmarking
// Remove sub directories from URI
$_SERVER['REQUEST_URI'] = preg_replace(
    '!/benchmarks/bear-1.0/var/www/index.php!',
    '',
    $_SERVER['REQUEST_URI']
);
//var_dump($_SERVER['REQUEST_URI']); exit;

$context = 'prod-app';
require dirname(dirname(__DIR__)) . '/bootstrap/bootstrap.php';
