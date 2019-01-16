<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/hello/index', function (Request $request, Response $response, array $args) {
    // Sample log message
	$this->logger->info("Slim-Skeleton '/' route");

	$output['memory'] = memory_get_usage(true);
	$output['memory_peak'] = memory_get_peak_usage(true);
	$output['execution_time'] = microtime(true) - STARTUP_TIME;
	$output['included_files'] = count(get_included_files());

        // echo implode(':', $output);

    // Render index view
    //return $this->renderer->render($response, 'index.phtml');
	return $response->write("Hello World! \n" .implode(':', $output));
});
