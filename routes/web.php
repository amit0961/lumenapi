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

// $router->get('/get', function () use ($router) {
//     return "I am get";
//     // return $router->app->version();
// });
// $router->post('/post', function () use ($router) {
//     return "I am post";
//     // return $router->app->version();
// });
// $router->put('/put', function () use ($router) {
//     return "I am put";
//     // return $router->app->version();
// });
// $router->delete('/delete', function () use ($router) {
//     return "I am delete";
//     // return $router->app->version();
// });

// $router->post('/amit', function(){
//     return "I am Amit Saha";

$router->get('/','MyController@my');

