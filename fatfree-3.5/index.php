<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();
$f3->set('AUTOLOAD','app/controllers/');

$f3->route('GET /index.php/hello/index', 'Hello->index');

$f3->run();

require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
