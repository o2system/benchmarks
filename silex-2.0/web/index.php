<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/index', 'App\\Controller\\Hello::index');

$app->run();

require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
