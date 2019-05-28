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
    return view('home.index');
});
Route::get('/shopping_cart/{id}', "HomeController@addtocart");
Route::get('/about', "HomeController@about");
Route::get('/contact', "HomeController@contact");
Route::get('/services', "HomeController@services");
Route::get('/faq', "HomeController@faq");
Route::get('/shop', "HomeController@shop");
Route::get('/admin/dashboard', "HomeController@dashboard");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/producttype','ProductTypeController');
Route::resource('/products','ProductsController');
