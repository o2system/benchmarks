<?php

define( 'STARTUP_TIME', microtime( true ) );
define( 'STARTUP_MEMORY', memory_get_usage( true ) );

// Kickstart the framework
$f3=require('lib/base.php');


$f3->route('GET /',
    function() {
        echo "Hello, world! \n";

        $output['memory'] = memory_get_usage(true);
	    $output['memory_peak'] = memory_get_peak_usage(true);
	    $output['execution_time'] = microtime(true) - STARTUP_TIME;
	    $output['included_files'] = count(get_included_files());
		            
		echo implode(':', $output);
    }
);
$f3->run();
// require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';

