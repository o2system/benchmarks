<?php
namespace App\Controller;


class HelloController extends AppController
{
    public function index()
    {
        ob_start();
        echo "Hello World!";
        require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
        $output = ob_get_contents();
        ob_end_clean();

        $response = new \Cake\Http\Response();
        $response->body($output);

        return $response;
    }
}
