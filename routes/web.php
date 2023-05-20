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
//$router->get('/sophia',['uses' => 'UserController@all']); //get all users

$router->get('/users','UserController@getAllUsers'); //get all users

$router->get('/guser/{id}', 'UserController@show'); // get user by id

$router->post('/auser', 'UserController@add'); // create new user record

$router->put('/uuser/{id}', 'UserController@u'); // update user record

$router->delete('/duser/{id}', 'UserController@d'); // delete record
