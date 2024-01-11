<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

//generate key
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //customer
    $router->get('/customer', 'customerController@index');
    $router->get('/customer/{id}', 'customerController@show');
    $router->post('/customer', 'customerController@store');
    $router->put('/customer/{id}', 'customerController@update');
    $router->delete('/customer/{id}', 'customerController@destroy');
    //menu
    $router->get('/menu', 'menuController@index');
    $router->get('/menu/{id}', 'menuController@show');
    $router->post('/menu', 'menuController@store');
    $router->put('/menu/{id}', 'menuController@update');
    $router->delete('/menu/{id}', 'menuController@destroy');
    //orderdetails
    $router->get('/orderdetails', 'orderdetailsController@index');
    $router->get('/orderdetails/{id}', 'orderdetailsController@show');
    $router->post('/orderdetails', 'orderdetailsController@store');
    $router->put('/orderdetails/{id}', 'orderdetailsController@update');
    $router->delete('/orderdetails/{id}', 'orderdetails@destroy');
    //restaurantorder
    $router->get('/restaurantorder', 'restaurantorderController@index');
    $router->get('/restaurantorder/{id}', 'restaurantorderController@show');
    $router->post('/restaurantorder', 'restaurantorderController@store');
    $router->put('/restaurantorder/{id}', 'restaurantorderController@update');
    $router->delete('/restaurantorder/{id}', 'restaurantorderController@destroy');
    //restauranttable
    $router->get('/restauranttable', 'restauranttableController@index');
    $router->get('/restauranttable/{id}', 'restauranttableController@show');
    $router->post('/restauranttable', 'restauranttableController@store');
    $router->put('/restauranttable/{id}', 'restauranttableController@update');
    $router->delete('/restauranttable/{id}', 'restauranttableController@destroy');



});
