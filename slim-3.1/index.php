<?php

require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/hello/index', function ($request, $response, $args) {
    return $response->write('Hello World!');
});

$app->run();

require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
