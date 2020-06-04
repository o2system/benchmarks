<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
	    echo 'Hello World!';
	    require $_SERVER['DOCUMENT_ROOT'].'/fullstack/libs/output_data.php';
    }
}
