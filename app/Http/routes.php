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

$app->get('/', function () use ($app) {
    //return $app->version();
    echo "Hello World";
});

$app->get('test', 'CustomerController@index');

$app->post('login', 'AuthenticateController@authenticate');

$app->get('search-customer/{keyword?}','CustomerController@search');

$app->get('search-items/{keyword?}','ItemController@search');

$app->post('place-order','OrderController@placeOrder');

$app->get('test-order','OrderController@testOrder');
