<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function index(): Response
    {
    	echo "Hello World! \n";
        
        $output['memory'] = memory_get_usage(true);
        $output['memory_peak'] = memory_get_peak_usage(true);
        $output['execution_time'] = microtime(true) - STARTUP_TIME;
        $output['included_files'] = count(get_included_files());
                    
        echo implode(':', $output);

	    // return new Response("Hello World! \n" . implode(':', $output));

    }
}
