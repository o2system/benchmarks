<?php

require_once(__DIR__.'/../vendor/autoload.php');

$framework = new Project\Framework();
$framework->registerDebugHandlers();
$framework->processHttpSapiRequest();

require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
