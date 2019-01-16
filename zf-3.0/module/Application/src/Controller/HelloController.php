<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HelloController extends AbstractActionController
{
    public function indexAction()
    {
    	// echo "Hello World! \n";
        
        $output['memory'] = memory_get_usage(true);
        $output['memory_peak'] = memory_get_peak_usage(true);
        $output['execution_time'] = microtime(true) - STARTUP_TIME;
        $output['included_files'] = count(get_included_files());
                    
        // echo implode(':', $output);

        return $this->getResponse()->setContent("Hello World! \n". implode(':', $output));

    }
}
