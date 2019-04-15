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
$router->group([
    'prefix' => 'auth'
], function ($router) {

    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->post('me', 'AuthController@me');

});

$router->group([

    'middleware' => 'jwt.auth',
    'prefix' => 'api'

], function ($router) {

    $router->get('/posts', function () use ($router) {
        return response()->json(['data'=>'test']);
    });

});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
