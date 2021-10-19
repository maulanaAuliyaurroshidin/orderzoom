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

Route::get('/', 'HomeController@ktgr');

Route::get('/order/{id}', 'HomeController@order');

Route::post('/order/save', 'OrderController@save');


Route::get('/bayar/pembayaran', 'OrderController@pembayaran');
Route::get('/session/set', 'OrderController@storeSessionData');
Route::get('/session/get', 'OrderController@getSessionData');
Route::get('/upload/nanti/', 'OrderController@deleteSessionData');

Route::get('/order/uploadbukti/{id}', 'OrderController@uploadbukti');

Route::post('/order/upload/{id}', 'OrderController@upload');


Route::get('/cari/pesanan','OrderController@cari');

Route::get('/pages/cari','OrderController@viewcari');

//admin
Route::get('/admin', 'AdminController@dashboard');

Route::get('/list','AdminController@view');
Route::get('/baru','AdminController@baru');
Route::get('/selesai','AdminController@selesai');