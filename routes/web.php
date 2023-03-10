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

Route::get('/', 'HomeController@index')->name("home.index");
Route::get('/about', 'HomeController@about')->name("home.about");
Route::get('/products', 'ProductController@index')->name("products.index");
Route::get('/products/{id}', 'ProductController@show')->name('products.show');



