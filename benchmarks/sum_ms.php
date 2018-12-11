<?php

$ms = isset($argv[1]) ? $argv[1] : 0;
$total = isset($argv[2]) ? $argv[2] : 0;

echo ($total > 0 && $ms > 0 ? (int) $ms + (int) $total : 'nan');
