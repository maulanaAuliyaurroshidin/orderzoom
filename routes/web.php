<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/order', 'OrderController@order');

Route::post('/order/save', 'OrderController@save');


Route::get('/order/pembayaran', 'OrderController@pembayaran');
Route::get('/session/set', 'OrderController@storeSessionData');
Route::get('/session/get', 'OrderController@getSessionData');
Route::get('/session/delete', 'OrderController@deleteSessionData');

Route::get('/order/uploadbukti/{id}', 'OrderController@uploadbukti');

Route::post('/order/upload/{id}', 'OrderController@upload');

