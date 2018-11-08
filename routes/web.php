<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

##CLIENTS
Route::get('/clients', 'ClientsController@index');
Route::any('/clients/result', 'ClientsController@result');
Route::get('/clients/{rut}/products', 'ClientsController@show');

##CREDIT-CARDS
Route::get('/credit-cards/{productId}' , 'CreditCardsController@show');

##TEF
Route::get('/tef/history/{productID}', 'TEFsController@show');
Route::any('/tef/{productId}/create', 'TEFsController@create');
