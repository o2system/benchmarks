<?php
namespace App\Controller;


class HelloController extends AppController
{
    public function index()
    {
        ob_start();
        echo "Hello World! \n";
        
        $output['memory'] = memory_get_usage(true);
        $output['memory_peak'] = memory_get_peak_usage(true);
        $output['execution_time'] = microtime(true) - STARTUP_TIME;
        $output['included_files'] = count(get_included_files());
                    
        echo implode(':', $output);
        // require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
        $output = ob_get_contents();
        ob_end_clean();

        $response = new \Cake\Http\Response();
        $response->body($output);

        return $response;
    }
}
