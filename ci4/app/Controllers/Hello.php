<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Hello extends Controller
{
	public function index()
	{
		echo 'Hello World!';
		require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
	}
}
