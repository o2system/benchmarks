<?php

// Kickstart the framework
$f3=require('lib/base.php');
$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);
$f3->run();
require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';

