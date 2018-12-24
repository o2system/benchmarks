<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$app->group(['namespace' => 'App\Http\Controllers'], function ($group) {
    $group->get(
        '/php-framework-benchmark/lumen-5.7/public/index.php/hello/index',
        'HelloController@index'
     );
});