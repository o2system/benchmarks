<?php
/**
 * This file is part of the O2System PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */
// ------------------------------------------------------------------------

namespace App\Controllers;

// ------------------------------------------------------------------------

use O2System\Framework\Http\Controllers\Restful as Controller;

/**
 * Class Service
 *
 * @package App\Controllers
 */
class Service extends Controller
{
    public function index()
    {
        //$this->sendPayload('Hello World');
        // exit('Hello World!');
        echo "Hello, world! \n";

        $output['memory'] = memory_get_usage(true);
	    $output['memory_peak'] = memory_get_peak_usage(true);
	    $output['execution_time'] = microtime(true) - STARTUP_TIME;
	    $output['included_files'] = count(get_included_files());
		            
        echo implode(':', $output);
        
        exit();
    }
}