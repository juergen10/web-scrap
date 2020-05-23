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
    return view('links/link');
});

Route::get('/link', 'ScrapController@view');
Route::post('link/scrap', 'ScrapController@scrap');

Route::get('/products', 'ProductController@index');
Route::get('/products/{product}', 'ProductController@show');
