<?php

namespace App\Actions;

use Aura\Web\Request;
use Aura\Web\Response;

class Hello
{
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function __invoke()
    {
        $output['memory'] = memory_get_usage(true);
        $output['memory_peak'] = memory_get_peak_usage(true);
        $output['execution_time'] = microtime(true) - STARTUP_TIME;
        $output['included_files'] = count(get_included_files());

        // echo implode(':', $output);

        $this->response->content->set(
            "Hello World! \n" .implode(':', $output)
        );


    }
}
