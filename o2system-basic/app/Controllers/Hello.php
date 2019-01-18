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

use O2System\Framework\Http\Controller;

/**
 * Class Hello
 *
 * @package App\Controllers
 */
class Hello extends Controller
{
    /**
     * Index
     */
    public function index()
    {
<<<<<<< HEAD
        echo "Hello World!\n";

        $output['memory'] = memory_get_usage(true);
        $output['memory_peak'] = memory_get_peak_usage(true);
        $output['execution_time'] = microtime(true) - STARTUP_TIME;
        $output['included_files'] = count(get_included_files());
        
        echo implode(':', $output);

=======
	    echo "Hello World! \n";
	    $output['memory'] = memory_get_usage(true);
	    $output['memory_peak'] = memory_get_peak_usage(true);
	    $output['execution_time'] = microtime(true) - STARTUP_TIME;
	            $output['included_files'] = count(get_included_files());
		            
		            echo implode(':', $output);

        // require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
>>>>>>> ca014bb08b34ede61dacf03640efdaab76849a4c
        exit();
    }
}
