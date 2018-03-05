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

//general routes
Route::get('/', 'GeneralController@home')->name('home');
Route::get('/services', 'GeneralController@services')->name('services');
Route::get('/products', 'GeneralController@products')->name('products');
Route::get('/contact', 'GeneralController@contact')->name('contact');