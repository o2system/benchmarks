<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * @package Aura.Web_Project
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
$path = dirname(__DIR__);
require "{$path}/vendor/autoload.php";
$kernel = (new \Aura\Project_Kernel\Factory)->newKernel(
    $path,
    'Aura\Web_Kernel\WebKernel'
);

define( 'STARTUP_TIME', microtime( true ) );
define( 'STARTUP_MEMORY', memory_get_usage( true ) );

//require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
$kernel();

