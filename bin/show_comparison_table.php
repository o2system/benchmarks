<?php

require __DIR__ . '/../libs/parse_results.php';
require __DIR__ . '/../libs/build_table.php';
require __DIR__ . '/../libs/recalc_relative.php';

$list = [
    'cake-3.2',
    'symfony-4.0',
    'zf-3.0',
    'lumen-5.7',
    'laravel-5.7',
    'o2system-basic',
    'o2system-hydro',
];

system('git checkout master');
$results_master = parse_results(__DIR__ . '/../output/results.hello_world.log');
system('git checkout optimize');
$results_optimize = parse_results(__DIR__ . '/../output/results.hello_world.log');
//var_dump($results_master, $results_optimize);

$is_fisrt = true;
foreach ($list as $fw) {
    $results = [];
    $results[$fw] = $results_master[$fw];
    $results[$fw . ' (*)'] = $results_optimize[$fw];
    
    $results = recalc_relative($results);
    echo build_table($results, $is_fisrt);
    $is_fisrt = false;
}
