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

    /**
     * Routes for resource post
     */
    $router->get('posts', 'PostsController@all');
    $router->get('posts/{id}', 'PostsController@get');
    $router->post('posts', 'PostsController@add');
    $router->put('posts/{id}', 'PostsController@put');
    $router->delete('posts/{id}', 'PostsController@remove');


    /**
     * Routes for resource tag
     */
    $router->get('tags', 'TagsController@all');
    $router->get('tags/{id}', 'TagsController@get');
    $router->post('tags', 'TagsController@add');
    $router->put('tags/{id}', 'TagsController@put');
    $router->delete('tags/{id}', 'TagsController@remove');

    /**
     * Routes for resource category
     */
    $router->get('categories', 'CategoriesController@all');
    $router->get('categories/{id}', 'CategoriesController@get');
    $router->post('categories', 'CategoriesController@add');
    $router->put('categories/{id}', 'CategoriesController@put');
    $router->delete('categories/{id}', 'CategoriesController@remove');

    /**
     * Routes for resource comment
     */
    $app->get('comments', 'CommentsController@all');
    $app->get('comments/{id}', 'CommentsController@get');
    $app->post('comments', 'CommentsController@add');
    $app->put('comments/{id}', 'CommentsController@put');
    $app->delete('comments/{id}', 'CommentsController@remove');


});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
