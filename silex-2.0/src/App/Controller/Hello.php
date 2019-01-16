<?php

namespace App\Controller;

class Hello
{
    public function index()
    {
    	$output['memory'] = memory_get_usage(true);
        $output['memory_peak'] = memory_get_peak_usage(true);
        $output['execution_time'] = microtime(true) - STARTUP_TIME;
        $output['included_files'] = count(get_included_files());
                    
        // echo implode(':', $output);

        // return 'Hello World!';
        return "Hello World! \n" .implode(':', $output);
        
        
    }
}
